<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InOut;
use App\Models\Item;

class ItemOutController extends Controller
{
    public function render ()
    {

        $item_out = InOut::all()->sortByDesc('id_item')->where('type','out');
        $items = Item::orderBy('item_name','asc')->get();
        return view('dashboards.item_out',['item_out' => $item_out,'items'=>$items]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_item'=> ['required','max:255'],
            'category' => ['required','max:255'],
            'merk'=> ['required','max:255'],
            'price' => ['required','numeric'],
            'qty' => ['required','numeric'],
            'total_price' => ['required','numeric'],
        ]);
        dd($data);
        $out = InOut::create([
            // 'item_name' => $request->item_name,
            
            'category' => $request->category,
            'merk' => $request->merk,
            'price' => $request->price,
            'quantity' => $request->qty,
            'total_price' => $request->total_price,
            'type' => 'out'
        ]);

        return redirect('/item-out');
    }

    public function update()
    {

    }

    public function delete($id)
    {
        $item_out = InOut::find($id);
        $item_out -> delete();
        return redirect('/item-out')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
