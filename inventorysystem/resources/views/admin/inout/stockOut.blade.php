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
            <a class="dropdown-item" href="/stockOutSupplies" id="Supplies">Supplies</a>
            <a class="dropdown-item" href="/stockOutEquipment" id="Equipment">Equipment</a>
          </div>
        </div>
        <!--end dropdown-->
        </div>
       
        <!--date 4 2day-->
        <div class="col-md-12">
          <div class="con d-flex col-md-12"> 
            <h4>May 17, 2024</h4>
            </div>       
        </div>

        <!--search bar -->
        <div class="col-md-4" style="padding: 20px">
        <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
        </div>
        </div>
            <!--search bar-->

        <!--table-->
        <div class="col-12 col-md-12 d-flex">
                <div class="card col-md-12" >
                <div class="card-body ">
        <table class="table ">
        <thead class="thead-dark">
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
        <tbody>
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">2024-03-191</th>
            <td class='text-center' style='align-items:center;'>18-Mar-2024</td>
            <td class='text-center' style='align-items:center;'>n/a</td>
            <td class='text-center' style='align-items:center;'>Supply</td>
            <td class='text-center' style='align-items:center;'>pc</td>
            <td class='text-center' style='align-items:center;'>Tarpaulin 5x8ft</td>
            <td class='text-center' style='align-items:center;'>2</td>
            <td class='text-center' style='align-items:center;'>600</td>
            <td class='text-center' style='align-items:center;'></td>
            <td class='text-center' style='align-items:center;'>A. Boriongan</td>
            <td class='text-center' style='align-items:center;'>2</td>
            <td></td>
            </tr>
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">2024-03-191</th>
            <td class='text-center' style='align-items:center;'>18-Mar-2024</td>
            <td class='text-center' style='align-items:center;' >for issuance of sticker</td>
            <td class='text-center' style='align-items:center;'>Equipment</td>
            <td class='text-center' style='align-items:center;'>unit</td>
            <td class='text-center' style='align-items:center;'>Steel Cabinet 2 Layers  </td>
            <td class='text-center' style='align-items:center;'>1</td>
            <td class='text-center' style='align-items:center;'>8000</td>
            <td class='text-center' style='align-items:center;'></td>
            <td class='text-center' style='align-items:center;'>A. Boriongan</td>
            <td class='text-center' style='align-items:center;'>2</td>
            <td class='text-center' style='align-items:center;'></td>
            </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        <!--table-->
        
      </div>
@endsection