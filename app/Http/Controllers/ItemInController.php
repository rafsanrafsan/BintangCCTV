<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InOut;
use App\Models\Item;

class ItemInController extends Controller
{
    //
    public function render()
    {
        $item_in = InOut::all()->sortByDesc('id_item')->where('type','in');
        $items = Item::orderBy('item_name','asc')->get();
        return view('dashboards.item_in',['item_in' => $item_in,'items'=>$items]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name'=> ['required','max:255'],
            'category' => ['required','max:255'],
            'merk'=> ['required','max:255'],
            'price' => ['required','numeric'],
            'qty' => ['required','numeric'],
            'total_price' => ['required','numeric'],
        ]);
        $in = InOut::create([
            'item_name' => $request->item_name,
            'category' => $request->category,
            'merk' => $request->merk,
            'price' => $request->price,
            'quantity' => $request->qty,
            'total_price' => $request->total_price,
            'type' => 'in'
        ]);

        return redirect('/item-in');
    }

    public function update()
    {

    }

    public function delete($id)
    {
        $item_in = InOut::find($id);
        $item_in -> delete();
        return redirect('/item-in');
    }
}
