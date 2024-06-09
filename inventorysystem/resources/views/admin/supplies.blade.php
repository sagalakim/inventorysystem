@extends('admin.inventdash')
@include('admin.modal.details')
@include('admin.modal.stockin')
@include('admin.modal.stockout')
@include('admin.modal.additems')
@include('admin.modal.edititems')
@section('content')


    <!--card that welcome admin-->
    <main class="content px-0 py-2">
      <div class="container-fluid">
        <div class="mb-1 mr-4 d-flex justify-content-between align-items">
          <h4>Supplies</h4>
          
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end search-button">Print</button>
        </div>        
        
       
      <div class="mb-1 d-flex justify-content-between align-items-between">
          <form action="{{route('searchitemsupply')}}" action='Get' enctype="multipart/form-data" class="search-form">
            <input type="text" name="search" class="search-input" placeholder="Search item...">
            <button type="submit" class="search-button">Search</button>
        </form>
          
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end search-button" data-toggle="modal" data-target="#additemsmodal">+ add Items</button>
        </div>

       

<div class="col-12 col-md-12 d-flex mt-4">
        <div class="card col-md-12" >
        <div class="card-body ">
<table class="table ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Unit</th>
      <th scope="col">Description</th>
      <th scope="col">Balance</th>
      <th class="text-center" style="width:350px" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($items->count() > 0 )
    @foreach($items as $item)
    <tr>
      <th scope="row">{{$item->unit}}</th>
      <td>{{$item->item_description}}</td>
      <td>{{$item->quantity}}</td>
      <td class = "text-center">

      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#detailsmodal" data-unit='{{$item}}'>
        <i class="fa-solid fa-circle-info custom-icon text-warning"></i>
    Details</a>
      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#stockinmodal" data-set='{{$item}}'>
        <i class="fas fa-layer-group custom-icon text-success"></i>
    Stock In</a>

      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#stockoutmodal" data-list='{{$item}}'>
          <i class="fa fa-send custom-icon text-danger"></i>
    Stock Out</a>
      
    <a class = "btn btn-dark  ml-2 mt-2" style="font-size:12px" data-toggle="modal" data-target="#edititemsmodal" data-edit='{{$item}}'>
      <i class="fa-solid fa-pen-to-square text-info"></i>
    Edit</a>

      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <th class = "text-center" colspan="4">No Items Added</th>
    </tr>
    @endif
    
  </tbody>
</table>
</div>
</div>
</div>
<!--table-->
</div>
          </div>
</div>

</div>
<!--end for org bar graph-->
        <!--pie graph-->

</div>

        
</div>

        <!--end pie graph-->

      </div>
    </main>
  </div>
</div>  
@endsection