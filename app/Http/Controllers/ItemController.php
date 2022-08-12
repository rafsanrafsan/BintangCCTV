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
        $data = $request->validate([
            'item_name' => 'required',
            'category' => 'required',
            'merk' => 'required',
            'stock' => 'required',
            'fund' => 'required',
            'price' => 'required',
        ]);

        Item::create($data);

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
            'id' => ['required', 'exists:items,id_item'],
            'item_name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'merk' => ['required', 'string', 'max:255'],
            'fund' => ['required', 'numeric', 'min:1'],
            'stock' => ['required', 'numeric', 'min:1'],
            'price' => ['required', 'numeric', 'min:1'],
        ]);
        $item = Item::findOrFail($data['id']);
        $item->update([
            'item_name' => $data['item_name'],
            'category' => $data['category'],
            'merk' => $data['merk'],
            'stock' => $data['stock'],
            'fund' => $data['fund'],
            'price' => $data['price'],
        ]);
        return back()->with('success', 'Item telah diupdate !');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item -> delete();
        return redirect('/item')-> with ('sukses','Data Berhasil Dihapus!!!');
    }
}
