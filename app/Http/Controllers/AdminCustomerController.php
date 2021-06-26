<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminCustomerController extends Controller
{
    use DeleteModelTrait;

    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $customers = $this->customer->paginate(10);
        return view('admin.customer.index', compact('customers'));
    }
    public function search(Request $r)
    {
        $customers = Customer::where('name', 'like', '%' . $r->key . '%')
            ->orWhere('id', $r->key)
            ->orWhere('address', $r->key)
            ->orWhere('phone', $r->key)->paginate(10);
        return view('admin.customer.index', compact('customers'));
    }
    public function create()
    {
        return view('admin.customer.add');
    }

    public function store(Request $request)
    {
        try {
            $dataInsert = [
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ];
            $this->customer->create($dataInsert);
            return redirect()->route('customers.index');

        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }
    }

    public function edit($id)
    {
        $customer = $this->customer->find($id);
        return view('admin.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        try {
            $dataUpdate = [
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ];
            $this->customer->find($id)->update($dataUpdate);
            return redirect()->route('customers.index');

        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ', Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->customer);
    }

}
