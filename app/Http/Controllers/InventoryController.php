<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function render()
    {
        $inventory = \App\Models\Inventory::all();
        return view('dashboards.inventory',['inventory' => $inventory]);
    }

    public function store(Request $request)
    {
        $inventory = new Inventory();
        $inventory->item_code = $request->item_code;
        $inventory->item_name = $request->item_name;
        $inventory->category = $request->type;
        $inventory->merk = $request->merk;
        $inventory->price = $request->price;
        $inventory->quantity = $request->quantity;
        $inventory->save();

        return redirect('/dashboard');
    }
}
