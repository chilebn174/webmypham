<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminOrderController extends Controller
{
    use DeleteModelTrait;

    private $order;
    private $customer;
    private $detail;

    public function __construct(Order $order, Customer $customer, OrderDetail $detail)
    {
        $this->order = $order;
        $this->customer = $customer;
        $this->detail = $detail;
    }

    public function index()
    {
        $orders = \DB::table('orderView')
            ->select('*')
            ->paginate(10);
        return view('admin.order.index', compact('orders'));
    }

    public function detail($id)
    {
        $order = $this->order->find($id);
        $products = \DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select(\DB::raw('products.price * order_details.number as money'), 'order_details.id as detail_id',
                'products.id', 'products.name', 'products.price', 'order_details.number')
            ->where('orders.id', '=', $id)
            ->paginate(10);
        $numbers = \DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select(\DB::raw('sum(products.price * order_details.number) as money'), \DB::raw('sum(order_details.number) as number'))
            ->where('orders.id', '=', $id)
            ->get();
        return view('admin.order.detail', compact('order', 'numbers', 'products'));

    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataUpdate = [
                'fee' => $request->fee,
                'status' => $request->status,
            ];
            if ($request->old_fee != $dataUpdate['fee']) {
                $dataUpdate['status'] = 1;
            }
            $this->order->find($id)->update($dataUpdate);
            DB::commit();
            return redirect(route('orders.index'));

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());

        }
    }

    public function deleteOrder($id)
    {
        return $this->deleteModelTrait($id, $this->order);
    }

    public function print($id)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_convert($id));
        return $pdf->stream();
    }

    public function print_convert($id)
    {
        $hoadon = \DB::table('orderView')
            ->select('*')
            ->where('order_id', '=', $id)
            ->get();
        $sanpham = \DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select(\DB::raw('products.price * order_details.number as money'), 'order_details.id as detail_id',
                'products.id', 'products.name', 'products.price', 'order_details.number')
            ->where('orders.id', '=', $id)
            ->get();
        $sum = \DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->join('products', 'products.id', '=', 'order_details.product_id')
            ->select(\DB::raw('sum(products.price * order_details.number) as money'),
                \DB::raw('sum(order_details.number) as number'))
            ->where('orders.id', '=', $id)
            ->get();
        $stt = 1;
        $output = '';
        foreach ($hoadon as $item) {
            $output .= '
<style type="text/css">
	table th{
		padding: 5px;
	}
	body{
	font-family: "DejaVu Sans";

	}
	.title{margin-left: 30px;
	margin-top: 60px;}
	table{
		width: 650px;
		margin:auto;
		font-family: "DejaVu Sans";
		margin-top: 50px;
	}
	.table1 td{
		text-align: right;
		padding: 10px;
	}
	table{
	text-align: center;
	}
	h2,h5, h1{
	text-align: center;
	}
	.ky1{
	margin-right: 100px;;
	}
</style>
<h1>Beauty store</h1>
<h5>Địa chỉ: Bắc Từ Niêm, Hà Nội</h5>
<h5>SĐT: 0862499134/0124567890</h5>
<h2>Hóa đơn bán hàng</h2>
<div class="title">
<p> Người nhận hàng: ' . $item->name . '</p>
<p> Số điệm thoại: ' . $item->phone . '</p>
<p> Địa chỉ: ' . $item->address . '</p>
</div>
<table class="table1" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<th>STT</th>
		<th>Sản phẩm</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Thành tiền</th>
	</tr>';
            foreach ($sanpham as $pr) {
                $output .= '
	<tr>
		<td>' . $stt . '</td>
		<td>' . $pr->name . '</td>
		<td>' . $pr->number . '</td>
		<td>' . $pr->price . '</td>
		<td>' . $pr->money . '</td>
	</tr>';
                $stt++;
            }

            $output .= '
	<tr>
		<td colspan="3"></td>
		<tH>Tổng sản phẩm:</tH>
		<td>' . $item->number . '</td>
	</tr>
	<tr>
		<td colspan="3"></td>
		<tH>Tổng tiền: </tH>
		<td>' . $item->money . '</td>
	</tr>
	<tr>
		<td colspan="3"></td>
		<tH>Phí ship:</tH>
		<td>' . $item->fee . '</td>
	</tr>
	<tr>
		<td colspan="3"></td>
		<tH>Phải trả:</tH>
		<td> ' . $item->phi . '
		</td>
	</tr>
</table>
<table>
<tr>
<td class="ky1"><b>Người mua hàng</b><p><i>Ký, ghi rõ họ và tên</i></p></td>
<td><b>Người bán hàng</b><p><i>Ký, ghi rõ họ và tên</i></p></td>
</tr>
</table>
';
        }
        return $output;


    }
}
