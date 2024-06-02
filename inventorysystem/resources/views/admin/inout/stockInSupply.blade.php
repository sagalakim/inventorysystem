@extends('admin.inventdash')
@include('admin.modal.details')
@include('admin.modal.stockin')
@include('admin.modal.stockout')
@include('admin.modal.additems')
@section('content')

<div class="container-fluid">
        <div class="mb-1 d-flex justify-content-between">
          <h3>Stock in - Supplies</h3>
           <!--for dropdown button for days total-->
           <div class="btn-group">
          <button class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Admin/StockIn/Supplies" id="Supplies">Supplies</a>
            <a class="dropdown-item" href="/Admin/StockIn/Equipment" id="Equipment">Equipment</a>
          </div>
        </div>
        <!--end dropdown-->
        </div>
       
        <!--date 4 2day-->
        <div class="col-md-12">
          <div class="con d-flex col-md-12"> 
            </div>       
        </div>

        <!--search bar -->
        <form id="stockinsearchForm" action="{{route('searchsupp')}}" action='Get' enctype="multipart/form-data">
          <div class="col-md-4" style="padding: 20px">
          <div class="input-group rounded">
          <input name=search type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button type='submit' id='stockinsearch' class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
          </button>
          </div>
          </div>
        </form>
            <!--search bar-->

        <!--table-->
        <div class="col-12 col-md-12 d-flex">
                <div class="card col-md-12" style="overflow-y:scroll;max-height:420px" >
                <div class="card-body ">
                  
        <table class="table " >
        <thead class="thead-dark align-items-center" style='font-size:14px;'>
            <tr>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">PO Number</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Date of PO</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Stock/ Property/ No./ ICS No.</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Type</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Unit</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Description (as reflected in PO)</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Quantity</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Unit Cost</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Remarks</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Balance after receipt</th>
            </tr>
        </thead>
        <tbody style="font-size:12px;">
        @if($stockins->count() > 0)
            @foreach($stockins as $stockin)
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">{{$stockin->po_number}}</th>
            <td class='text-center' style='align-items:center; width:100px;'>{{$stockin->po_date}}</td>
            <td class='text-center' style='align-items:center;' >{{$stockin->stock_no}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->type}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->unit}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->description}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->quantity}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->unit_cost}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->status_remarks}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockin->balance_after_receipt}}</td>
            </tr>
            @endforeach
          @else
          <tr>
            <th class = "text-center" colspan="10">No Items Added</th>
          </tr>
          @endif
        </tbody>
        </table>
        </div>
        </div>
        </div>
        <!--table-->    
      </div>
@endsection