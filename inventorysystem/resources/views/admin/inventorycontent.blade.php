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
          <h4>Admin Dashboard</h4>
          
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end search-button">Print</button>
        </div>        
        
        <div class="col-md-12">
          <div class="con d-flex col-md-12"> 
                  <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                      <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                          <div class="row g-0 w-100  ">
                            <div class="col-6">
                              <div class="p-3 mb-2">
                                <h4>SUPPLIES</h4>
                                <p class="mb-2">Purchasing request</p>
                                <a class = "mr-4 next-icon" href="supplies" onclick="showNextPage()">
                                  <i class="fa-solid fa-circle-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                              <img src="{{asset('image/4207.jpg')}}" class="img-fluid illustration-img" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

          <!--card for total
          <div class="col-12 col-md-6 d-flex">
            <div class="card flex-fill border-0">
              <div class="card-body py-4">
                <div class="d-flex align-items-start">
                  <div class="flex-grow-1">
                    <h4 class="mb-2">
                      128
                    </h4>
                    <p class="mb-2">
                      Total survey
                    </p>
                    <div class="mb-0">
                      
                      <span class="badge text-success me-2">
                        +5%
                      </span>
                      
                      <span class="text-muted">
                        Since last week 
                      </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        end sa card-->
        <!--for the total with pic-->
        <div class="col-12 col-md-6 d-flex" >
            <div class="card flex-fill border-0 people">
              <div class="card-body p-0 d-flex flex-fill">
                <div class="row g-0 w-100 ">
                  <div class="col-6">
                    <div class="p-3 m-1">
                    <h4 class="mb-2">
                      EQUIPMENT
                    </h4>
                    
                    <p class="mb-2">
                      Purchasing request
                    </p>
                    <div class="mb-0">
                    <a class = "mr-4 next-icon" href="equipment" onclick="showNextPage()">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                  </div>
                    </div>
                  </div>
                  <div class="col-6 align-self-end text-end" >
                    <img src="{{asset('image/group.png')}}" class="img-fluid illustration-img" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--end the total with pic-->
        <!--for non org bar graph-->
    
      <div class="mb-1 d-flex justify-content-between align-items">
          <form action="search.php" method="get" class="search-form">
            <input type="text" name="query" class="search-input" placeholder="Search item...">
            <button type="submit" class="search-button">
            <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
          
          <button type="button" class="btn btn-primary btn-sm align-self-end text-end search-button" data-toggle="modal" data-target="#additemsmodal">+ add Items</button>
        </div>

<div class="col-12 col-md-12 d-flex mt-4">
        <div class="card col-md-12" style="overflow-y:scroll;max-height:210px" >
        <div class="card-body ">
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Unit</th>
      <th scope="col">Description</th>
      <th scope="col">Balance</th>
      <th class = "text-center" style="width:350px" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($items->count() > 0)
    @foreach($items as $item)
    <tr>
      <th scope="row">{{$item->unit}}</th>
      <td>{{$item->item_description}}</td>
      <td>{{$item->quantity}}</td>
      <td class = "text-center">

      <a class = "btn btn-dark  ml-2" style="font-size:12px" data-toggle="modal" data-target="#detailsmodal"  data-unit='{{$item}}'>
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