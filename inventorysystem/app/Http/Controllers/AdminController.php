<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AdminController extends Controller
{
    public function itemstore(Request $request){

        Item::create([
            'item_name' => $request->item_name,
            'item_type'=> $request->item_type,
            'unit' => $request->unit,
            'item_description' => $request->description,
            'quantity' => $request->quantity,
            'balance' => $request->quantity,
        ]);

        return redirect()->back();
    }
}
