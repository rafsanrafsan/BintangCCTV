<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function render() 
    {
        $supplier = \App\Models\Supplier::all();
        return view('dashboards.supplier',['supplier'=>$supplier]);

    }

    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact = $request->contact;
        $supplier->address = $request->address;
        $supplier->save();

        return redirect('/supplier');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id_supplier' => ['required', 'numeric'],
            'supplier_name' => 'required',
            'contact' => 'required',
            'address' => 'required',
        ]);
        $supplier = Supplier::findOrFail($data['id_supplier']);
        $supplier->update([
            'supplier_name' => $data['supplier_name'],
            'contact' => $data['contact'],
            'address' => $data['address'],
        ]);
        return back()->with('success', 'Pasien telah diupdate !');
    }
    public function delete($id)
    {
        $supplier = Supplier::find($id);
        $supplier -> delete();
        return redirect('/supplier')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
