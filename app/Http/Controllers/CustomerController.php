<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function render()
    {
        $customer = \App\Models\Customer::all();
        return view('dashboards.customer',['customer'=>$customer]);
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->customer_name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        return redirect('/customer');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id_customer' => ['required', 'numeric'],
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $customer = Customer::findOrFail($data['id_customer']);
        $customer->update([
            'name' => $data['customer_name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        return back()->with('success', 'Customer telah diupdate !');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer -> delete();
        return redirect('/customer')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
