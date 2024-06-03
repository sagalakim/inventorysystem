@extends('admin.inventdash')
@include('admin.modal.details')
@include('admin.modal.stockin')
@include('admin.modal.stockout')
@include('admin.modal.additems')
@section('content')

<div class="container-fluid">
        <div class="mb-1 d-flex justify-content-between">
          <h3>Stock Out</h3>
           <!--for dropdown button for days total-->
        <div class="btn-group">
          <button class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filter
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/Admin/StockOut/Supplies" id="Supplies">Supplies</a>
            <a class="dropdown-item" href="/Admin/StockOut/Equipment" id="Equipment">Equipment</a>
          </div>
        </div>
        <!--end dropdown-->
        </div>
       
        <!--date 4 2day-->

        <!--search bar -->
        <form action="{{route('search2')}}" action='Get' enctype="multipart/form-data">
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
                <div class="card col-md-12" style="overflow-y:scroll;max-height:400px" >
                <div class="card-body ">
        <table class="table ">
        <thead class="thead-dark" style='font-size:12px;'>
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
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Received by</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">No. of units received by Employee</th>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">Date received by employee</th>
            </tr>
        </thead>
        <tbody style='font-size:12px;'>
        @if($stockouts->count() > 0)
            @foreach($stockouts as $stockout)
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">N/A</th>
            <td class='text-center' style='align-items:center; width:100px;'>N/A</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->stock_no}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->type}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->unit}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->description}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->quantity}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->unit_cost}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->status_remarks}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->received_by}}</td>
            <td class='text-center' style='align-items:center;'>{{$stockout->no_of_units_received}}</td>
            <td>{{$stockout->date_received}}</td>
            </tr>
            @endforeach
          @else
          <tr>
            <th class = "text-center" colspan="12">No Items Added</th>
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