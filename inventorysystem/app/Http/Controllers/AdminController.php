<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Stockin;
use App\Models\Stockout;
use App\Models\PurchaseRequest;
use Carbon\Carbon;
use PDF;


class AdminController extends Controller
{
    public function itemstore(Request $request){

        if($request->ajax()){

            if($request->type == 'Equipment'){
                $unitcost = $request->unitcost;
                $remarks = $request->remarks;
                Item::create([
                    'par_ics' => $request->par,
                    'date_acquired' => $request->dateacquired,
                    'stock_no'=> $request->stockno,
                    'item_type'=> $request->type,
                    'unit' => $request->unit,
                    'item_description' => $request->description,
                    'quantity' => $request->quantity,
                    'unit_cost' => $unitcost,
                    'status_remarks' => $remarks,
                    'custodian_name' => $request->custname,
                    'balance' => $request->quantity,
                ]);

                return response()->json(['success' => true]);
            }else{
                $unitcost = $request->unitcost;
                $remarks = $request->remarks;
                Item::create([
                    'par_ics' => $request->par ?? '',
                    'date_acquired' => $request->dateacquired ??Carbon::now(),
                    'stock_no'=> $request->stockno,
                    'item_type'=> $request->type,
                    'unit' => $request->unit,
                    'item_description' => $request->description,
                    'quantity' => $request->quantity,
                    'unit_cost' => $unitcost,
                    'status_remarks' => $remarks,
                    'custodian_name' => '',
                    'balance' => $request->quantity,
                ]);

                return response()->json(['success' => true]);
            }
        }
    }

    public function itemedit(Request $request){

        if($request->ajax()){

            $item = Item::findOrFail($request->item);
            
            if($item->quantity == $request->quantity){
                $item->par_ics = $request->par;
                $item->date_acquired = $request->dateacquired;
                $item->stock_no = $request->stockno;
                $item->item_type = $request->type;
                $item->unit = $request->unit;
                $item->item_description = $request->description;
                $item->quantity = $request->quantity;
                $item->unit_cost = $request->unitcost;
                $item->status_remarks = $request->remarks;
                $item->custodian_name = $request->custname ?? '';

                $item->save();
            }
            else{
                $item->par_ics = $request->par;
                $item->date_acquired = $request->dateacquired;
                $item->stock_no = $request->stockno;
                $item->item_type = $request->type;
                $item->unit = $request->unit;
                $item->item_description = $request->description;
                $item->quantity = $request->quantity;
                $item->balance = $request->quantity;
                $item->unit_cost = $request->unitcost;
                $item->status_remarks = $request->remarks;
                $item->custodian_name = $request->custname ?? '';
    
                $item->save();
            }

            return response()->json(['success' => true]);
        }
    }

    public function stockin(Request $request){

        if($request->ajax()){
        // Add validation rules for each field
        $request->validate([
        'item' => 'required',
        'ponumber' => 'required',
        'podate' => 'required',
        'stockno' => 'required',
        'type' => 'required',
        'unit' => 'required',
        'description' => 'required',
        'quantity' => 'required|numeric',
        'unitcost' => 'required|numeric',
        'statusremarks' => 'required',
        ]);
        
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

        $request->validate([
            'item' => 'required',
            'stockno' => 'required',
            'type' => 'required',
            'unit' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'unitcost' => 'required|numeric',
            'remarks' => 'required',
            'receivedby' => 'required',
            'nounits' => 'required',
            'dategiven' => 'required',
        ]);

        $item = Item::findOrFail($request->item);

        $item->balance -= $request->nounits;
        $item->save();

        Stockout::create([
            'item_id' => $request->item,
            'po_number' => '',
            'po_date'=> Carbon::now(),
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

    public function searchstockin(Request $request){
        $stockins = Stockin::where('description', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockIn',compact('stockins'));

    }

    public function searchstockinSupply(Request $request){
        $stockins = Stockin::where('type', '=', 'Supply')->where('description', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockInSupply',compact('stockins'));

    }

    public function searchstockinEquipment(Request $request){
        $stockins = Stockin::where('type', '=', 'Equipment')->where('description', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockInEquipment',compact('stockins'));

    }

    public function searchstockout(Request $request){
        $stockouts = Stockout::where('description', 'like', '%'. $request->search. '%')->orWhere('received_by', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockOut',compact('stockouts'));

    }

    public function searchstockoutSupply(Request $request){
        $stockouts = Stockout::where('type', '=', 'Equipment')->orWhere('description', 'like', '%'. $request->search. '%')->orWhere('received_by', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockOutSupply',compact('stockouts'));

    }

    public function searchstockoutEquipment(Request $request){
        $stockouts = Stockout::where('type', '=', 'Equipment')->orWhere('description', 'like', '%'. $request->search. '%')->orWhere('received_by', 'like', '%'. $request->search. '%')->orderBy('po_date', 'desc')->get();
        return view('admin.inout.stockOutEquipment',compact('stockouts'));

    }

    public function searchitem(Request $request){
        $items = Item::where('item_type', '=', 'Supply')->where('item_description', 'like', '%'. $request->search. '%')->orderBy('item_description', 'asc')->get();
        return view('admin.inventorycontent',compact('items'));

    }

    public function searchitemsupplies(Request $request){
        $items = Item::where('item_type', '=', 'Supply')->where('item_description', 'like', '%'. $request->search. '%')->orderBy('item_description', 'asc')->get();
        return view('admin.supplies',compact('items'));

    }
    public function searchitemequipments(Request $request){
        $items = Item::where('item_type', '=', 'Equipment')->where('item_description', 'like', '%'. $request->search. '%')->orderBy('item_description', 'asc')->get();
        return view('admin.equipment',compact('items'));

    }
    public function downloadpdf(){
        set_time_limit(300);
    
        $stockouts = Stockout::all();
        $items = Item::orderBy('item_description', 'asc')->get();
        $stockins = Stockin::orderBy('po_date', 'desc')->get();

    
            $info = [
                'stockouts' => $stockouts,
                'items' => $items,
                'stockins' => $stockins,
            ];
    
            $pdf = Pdf::loadView('admin.print', $info);
            $pdf->setPaper('Legal', 'Portrait');
            return $pdf->download('Inventory-test.pdf');
    }
}
