<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Item_Order;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function render()
    {
        $order = Order::with(['supplier'])->orderBy('id_order','desc')->get();
        $suppliers = Supplier::orderBy('supplier_name','asc')->get();
        $items = Item::orderBy('item_name','asc')->get();
        return view('dashboards.order',['order'=>$order,'suppliers'=>$suppliers, 'items'=>$items]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'supplier' => ['required','max:255'],
            'items'=> ['required','array'],
            'items.*.item'=> ['required','numeric', 'exists:items,id_item'],
            'items.*.qty'=> ['required','integer', 'min:1'],
            'description'=> ['nullable','string'],
        ]);
        $supplier = Supplier::find($data['supplier']);
        $order = Order::create([
            'id_supplier' => $supplier->id_supplier,
            'address' => $supplier->address,
            'status' => 'Pending',
            'description' => $data['description'],
        ]);

        foreach ($data['items'] as $items) {
            $item_order[] = Item_Order::create([
                'id_order' => $order->id_order,
                'id_item' => $items['item'],
                'quantity' => $items['qty'],
            ]);
        }

        return redirect('order')->with('sukses','Data Berhasil Diinput!!!');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => ['required', 'numeric', 'exists:orders,id_order'],
            'status' => ['required', 'string', 'in:Pending,Selesai,Batal']
        ]);
        $order = Order::find($data['id']);
        if ($order['status'] == 'Pending') {
            if ($data['status'] == 'Pending') {
                $items = $order->item;
                foreach ($items as $item) {
                    $last_stock = $item->item->stock;
                    $item->item->update([
                        'stock' => $last_stock+$item->quantity
                    ]);
                }
            }
            $order->update([
                'status' => $data['status']
            ]);
        } else {
            return redirect('order')->with('gagal','Hanya status pending yang dapat diubah !');
        }
        return redirect('order')->with('sukses','Berhasil merubah status order, stok item berhasil diupdate !');
    }
}
