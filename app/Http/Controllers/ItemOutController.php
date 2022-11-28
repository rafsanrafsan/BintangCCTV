<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InOut;
use App\Models\Item;
use App\Models\Customer;

class ItemOutController extends Controller
{
    public function render ()
    {

        $item_out = InOut::all()->sortByDesc('id_item')->where('type','out');
        $items = Item::orderBy('item_name','asc')->get();
        $customers = Customer::orderBy('name','asc')->get();
        return view('dashboards.item_out',['item_out' => $item_out,'items'=>$items, 'customers' => $customers]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_item' => ['required', 'exists:items,id_item'],
            'category' => ['required', 'string', 'max:255'],
            'merk' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:1'],
            'qty' => ['required', 'numeric', 'min:1'],
            'total_price' => ['required', 'numeric', 'min:1'],
        ]);
        $data['quantity'] = $data['qty'];
        unset($data['qty']);
        $item = Item::findOrFail($data['id_item']);
        InOut::create($data + [
            'type' => 'out'
        ]);
        $item->update([
            'stock' => $item->stock - $data['quantity']
        ]);

        return redirect('/item-out');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id' => ['required', 'exists:in_outs,id'],
            'id_item' => ['required', 'exists:items,id_item'],
            'category' => ['required', 'string', 'max:255'],
            'merk' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:1'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'total_price' => ['required', 'numeric', 'min:1'],
        ]);

        $in_out = InOut::findOrFail($data['id']);

        $last_item = Item::findOrFail($data['id_item']);
        $last_item->update([
            'stock' => (int) $last_item->stock + (int) $in_out['quantity']
        ]);

        $update_item = Item::findOrFail($data['id_item']);
        $update_item->update([
            'stock' => (int) $update_item->stock - (int) $data['quantity']
        ]);

        $in_out->update([
            'id_item' => $data['id_item'],
            'category' => $data['category'],
            'merk' => $data['merk'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'total_price' => $data['total_price'],
        ]);
        return redirect('/item-out');
    }

    public function delete($id)
    {
        $item_out = InOut::find($id);
        $item_out -> delete();
        return redirect('/item-out')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
