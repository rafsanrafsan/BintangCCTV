<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function render()
    {
        $item = \App\Models\Item::all()->sortByDesc('id_item');
        return view('dashboards.item',['item' => $item]);
    }

    public function store(Request $request)
    {
        $item = new Item();
        $item->item_name = $request->item_name;
        $item->category = $request->category;
        $item->merk = $request->merk;
        $item->stock = $request->stock;
        $item->fund = $request->fund;
        $item->price = $request->price;
         $item->save();

        return redirect('/item');
    }

    public function edit($id)
    {
        $item = \App\Models\Item::find($id);
        return view('');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'id_item' => ['required', 'numeric'],
            'item_name' => 'required',
            'category' => 'required',
            'merk' => 'required',
            'stock' => 'required',
            'fund' => 'required',
            'price' => 'required',
        ]);
        $item = Item::findOrFail($data['id_item']);
        $item->update([
            'item_name' => $data['name'],
            'category' => $data['category'],
            'merk' => $data['merk'],
            'stock' => $data['stock'],
            'fund' => $data['fund'],
            'price' => $data['price'],
        ]);
        return back()->with('success', 'Pasien telah diupdate !');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item -> delete();
        return redirect('/item')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
