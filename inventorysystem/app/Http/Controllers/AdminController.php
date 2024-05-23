<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Stockin;
use App\Models\Stockout;
use App\Models\PurchaseRequest;


class AdminController extends Controller
{
    public function itemstore(Request $request){

        if($request->ajax()){

            $unitcost = $request->unitcost;
            $remarks = $request->remarks;
            Item::create([
                'po_number' => $request->ponumber,
                'po_date'=> $request->podate,
                'stock_no'=> $request->stockno,
                'item_type'=> $request->item_type,
                'unit' => $request->unit,
                'item_description' => $request->description,
                'quantity' => $request->quantity,
                'balance' => $request->quantity,
            ]);

            return response()->json(['success' => true]);
        }
    }

    public function stockin(Request $request){

        if($request->ajax()){
        $item = Item::findOrFail($request->item);

        $item->quantity += $request->quantity;
        $item->balance += $request->quantity;
        $item->save();

        Stockin::create([
            'item_id' => $request->item,
            'po_number' => $request->ponumber,
            'po_date'=> $request->podate,
            'stock_no'=> $request->stockno,
            'type'=> $request->type,
            'unit'=> $request->unit,
            'description'=> $request->description,
            'quantity'=> $request->quantity,
            'unit_cost'=> $request->unitcost,
            'status_remarks'=> $request->statusremarks,
            'balance_after_receipt' => $item->balance,
        ]);

        return response()->json(['success' => true]);
    }
    }

    public function stockout(Request $request){

        if($request->ajax()){

        $item = Item::findOrFail($request->item);

        $item->quantity -= $request->nounits;
        $item->balance -= $request->nounits;
        $item->save();

        Stockout::create([
            'item_id' => $request->item,
            'po_number' => $request->ponumber,
            'po_date'=> $request->podate,
            'stock_no'=> $request->stockno,
            'type'=> $request->type,
            'unit'=> $request->unit,
            'description'=> $request->description,
            'quantity'=> $request->quantity,
            'unit_cost'=> $request->unitcost,
            'status_remarks'=> $request->remarks,
            'received_by' => $request->receivedby,
            'no_of_units_received' => $request->nounits,
            'date_received' => $request->dategiven,
        ]);
        return response()->json(['success' => true]);
    }
    }

    public function purchaserequest(Request $request){
        $item = Item::findOrFail($request->item);

        PurchaseRequest::create([
            'item_id' => $item->id,
            'requested_item_name' => $item->item_name,
            'requested_item_type' => $item->item_type,
            'unit' => $item->unit,
            'item_description' => $request->description,
            'quantity' => $request->quantity,
            'balance' => $request->quantity,
            'status' => 'Pending',
            'remarks' => 'None',
        ]);

        return redirect()->back();
    }
}
