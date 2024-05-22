@extends('admin.inventdash')
@include('admin.modal.details')
@include('admin.modal.stockin')
@include('admin.modal.stockout')
@include('admin.modal.additems')
@section('content')


    <!--card that welcome admin-->
    <main class="content px-0 py-2">
      <div class="container-fluid">
        <div class="mb-1 mr-4 d-flex justify-content-between align-items">
          <h4>Equipment</h4>
          
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end search-button">Print</button>
        </div>
        <h6>Date</h6>
        
        
       
      <div class="mb-1 d-flex justify-content-between align-items-between">
          <form action="search.php" method="get" class="search-form">
            <input type="text" name="query" class="search-input" placeholder="Search item...">
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
    <tr>
      <th scope="row">PC</th>
      <td>Ballpen</td>
      <td>20</td>
      <td class = "text-center">

      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#detailsmodal">
        <i class="fa-solid fa-circle-info custom-icon text-warning"></i>
    Details</a>
      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#stockinmodal">
        <i class="fas fa-layer-group custom-icon text-success"></i>
    Stock In</a>

      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#stockoutmodal">
          <i class="fa fa-send custom-icon text-danger"></i>
    Stock Out</a>
      
      </td>
    </tr>
    
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