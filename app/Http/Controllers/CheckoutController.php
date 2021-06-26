<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Components\CountCart;
use App\Customer;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    private $order;
    private $orderDetail;
    private $customer;
    public function __construct(Order $order, OrderDetail $orderDetail, Customer $customer)
    {
        $this->order=$order;
        $this->orderDetail=$orderDetail;
        $this->customer=$customer;
    }
    public function getCountCart(){
        $countCart= new CountCart();
        $arr=$countCart->countCart();
        return $arr;
    }
    public function getCheckout()
    {
        $num=$this->getCountCart()['num'];
        $cart=session()->get('cart'.Auth::id());
        $total=$this->getCountCart()['total'];
        $user=session()->get('user');
        $category = Category::all();
        $brand = Brand::all();
        return view('user/checkout',compact('user','num','total','cart','category','brand'));

    }
    public function postCheckout(Request $request)
    {
        $request->session()->put('info', $request->input());
        if ($request->payment) {
            $total=$request->total;
            return view('user/payment/index',compact('total'));
        }else{
        $cart = session()->get('cart' . Auth::id());
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->save();
        $dataCheckout = [
            'customer_id' => $customer->id,
            'status' => 0,
            'fee' => 30000
        ];
        $order = $this->order->create($dataCheckout);

        if (!empty($cart)) {
            foreach ($cart as $key => $item) {
                $or = $this->orderDetail->create([
                        'order_id' => $order->id,
                        'product_id' => $key,
                        'number' => $item['qty']
                    ]
                );
            }

        }
        session()->forget('cart' . Auth::id());
        return redirect()->route('trang-chu');
    }
    }
    public  function payment(Request $request){
        $vnp_TxnRef = $request->order_id;
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $request->amount ;
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = request()->ip();
        $vnp_HashSecret=env('VNP_HASHSECRET');
        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMNCODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('payment.return'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=MD5&vnp_SecureHash=' . $vnpSecureHash;
        }
        dd(json_encode($vnp_Url));
        return redirect($vnp_Url);
    }
    public function return_vnpay(Request $request){
        $url = session('url_prev','/');
        dd($request->all());
        if($request->vnp_ResponseCode == "00") {
            //$this->apSer->thanhtoanonline(session('cost_id'));
            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
