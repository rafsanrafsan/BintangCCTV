<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InOut;
use App\Models\Item;
use App\Models\Item_Order;
use App\Models\Order;

class ItemInController extends Controller
{
    //
    public function render()
    {
        $item_in = InOut::all()->sortByDesc('id_item')->where('type','in');
        $items = Item::orderBy('item_name','asc')->get();
        $order = Order::with(['supplier'])->where('status', 'Pending')->get();
        return view('dashboards.item_in',[
            'item_in' => $item_in,
            'items'=>$items,
            'order'=>$order
        ]);
    }

    public function store(Request $request)
    {
        
        // $item->update([
        //     'stock' => $item->stock + $data['quantity']
        // ]);

        $item_order = Item_Order::where('id_order', $request->id_item)->get();
        $order = Order::findOrFail($request->id_item);
        foreach ($item_order as $index => $value) {
            $items[] = $value->id_item;
        }

        foreach ($items as $index => $value) {
            $item[] = Item::where('id_item', $value)->first();
        }

        
        foreach ($item as $index => $value) {
            if ($value != null) {
                Item::findOrFail($items[$index])->update([
                    'stock' => $item[$index]->stock + $item_order[$index]->quantity
                ]);
            };
        }

        foreach ($item_order as $index => $value) {
            if ($item[$index] != null) {
                InOut::create([
                    'id_customer' => null,
                    'id_item' => $value->id_item,
                    'type' =>  'in',
                    'category' => $item[$index]->category,
                    'price' => $item[$index]->price,
                    'merk' => $item[$index]->merk,
                    'total_price' => $item[$index]->price * $item_order[$index]->quantity,
                    'quantity' => $item_order[$index]->quantity
                ]);
            }
        }
        $order->update([
            'status' => 'Selesai'
        ]);

        return redirect('/item-in');

        // $data = $request->validate([
        //     'id_item' => ['required', 'exists:items,id_item'],
        //     'category' => ['required', 'string', 'max:255'],
        //     'merk' => ['required', 'string', 'max:255'],
        //     'price' => ['required', 'numeric', 'min:1'],
        //     'qty' => ['required', 'numeric', 'min:1'],
        //     'total_price' => ['required', 'numeric', 'min:1'],
        // ]);
        // $data['quantity'] = $data['qty'];
        // unset($data['qty']);
        // $item = Item::findOrFail($data['id_item']);
        // InOut::create($data + [
        //     'type' => 'in'
        // ]);
        // $item->update([
        //     'stock' => $item->stock + $data['quantity']
        // ]);

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
            'stock' => (int) $last_item->stock - (int) $in_out['quantity']
        ]);

        $update_item = Item::findOrFail($data['id_item']);
        $update_item->update([
            'stock' => (int) $update_item->stock + (int) $data['quantity']
        ]);

        $in_out->update([
            'id_item' => $data['id_item'],
            'category' => $data['category'],
            'merk' => $data['merk'],
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'total_price' => $data['total_price'],
        ]);
        return redirect('/item-in');
    }

    public function delete($id)
    {
        $item_in = InOut::find($id);
        $item_in -> delete();
        return redirect('/item-in');
    }

    public function getItem($id)
    {
        $items = Item_Order::with('item')->where('id_order', $id)->get();

        $table = '<table class="table"><thead><tr><th>Name</th><th>Merk</th><th>Category</th><th>Price</th><th>Quantity</th><th>Total</th></tr></thead><tbody>';


        foreach ($items as $item) {
            $table = $table.'<tr>';
            $table = $table.'<td>'.$item->item->item_name.'</td>';
            $table = $table.'<td>'.$item->item->merk.'</td>';
            $table = $table.'<td>'.$item->item->category.'</td>';
            $table = $table.'<td>'.$item->item->price.'</td>';
            $table = $table.'<td>'.$item->quantity.'</td>';
            $table = $table.'<td>'.($item->item->price*$item->quantity).'</td>';
            $table = $table.'</tr>';
        }
        $table = $table.'</tbody></table>';

        echo json_encode($table);
    }
}
