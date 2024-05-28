<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stock in</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="resources/css/app.css">

  <!--data set-->
  <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.7/b-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.css" rel="stylesheet">
  <style>
    .data_table{
        background: #fff;
        padding: 15px;
        box-shadow: 1px 3px 5px #aaa;
        border-radius: 5px;
    }
    
    .data_table .btn{
        padding: 5px 10px;
        margin: 10px 3px 10px 0px;
    }

    body {
  margin: 1in;
  padding: 0;
  font-size: 12px;
  line-height: 1.5;
  page-break-inside: avoid;
}
.card {
            border: none; 
            box-shadow: none; 
            padding: 1em;
        }
       .form-check-input {
            border: 2px solid #000; 
        }
       .small-horizontal-line {
            display: inline-block;
            border: none;
            border-top: 2px solid #000; 
            width: 2in; 
            vertical-align: middle; 
            
        }
        
</style>
</head>
<body>
  <!--card-->
    <div class="" style="margin-top:-110px;">
            <div class="align-items-center justify-content-center flex">

                <div class="align-items-center text-center justify-content-center flex"> 
                <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('images/DOLE_picture.png'))) }}" style="height: 60px; margin-left: 0px; margin-top:-30px;justify-content:center " alt="Image">
            <div class="text-center" >
                <p class="mb-0" style="font-size: 13px;">Republic of the Philippines</p>
                <h6 class="mb-5" style="font-size: 14px;">DEPARTMENT OF LABOR AND EMPLOYMENT</h6>
                <h6 class="mb-0" style="font-size: 14px; margin-top:-35px">MISAMIS ORIENTAL PROVINCIAL FIELD OFFICE</h6>
            </div>
        </div>
<!--card-->

<!--inventory Items-->
<div class=" mt-3">
<div class="text-start"> 
                    <div class="" style=" width:200px;  height:45px;">
                        <p style="font-size: 16px; margin-left:-110px; font-weight: bold;">A. ITEMS</p>
                    </div>
                </div>
            </div>
    </div>
<!--inventory-->


<!--for data set -->
<div class="container">
  
    <div class="row">
        <div class="col-12">
            <!--table-->
            <div class="data_table">
            <table id="example" class="table table-bordered" style="margin-left:-125px; margin-top:-30px; border:1px solid black">
        <thead style='font-size:12px; background-color:#000066;color:white;'>
        <tr>
        <th scope="col" class='align-items-center' style='vertical-align:middle;width:15% '>PO Number</th>
        <th scope="col" style='vertical-align:middle;width:10% '>Date of PO</th>
        <th scope="col" style='vertical-align:middle;width:50px'>Stock/Property No./ICS No.</th>
        <th scope="col" style='vertical-align:middle '>Type</th>
        <th scope="col" style='vertical-align:middle '>Unit</th>
        <th scope="col" style='vertical-align:middle '>Description (as reflected in the PO)</th>
        <th scope="col" style='vertical-align:middle '>Quantity</th>
        <th scope="col" style='vertical-align:middle '>Unit Cost</th>
        <th scope="col" style='vertical-align:middle '>Remarks</th>
        <th scope="col" style='vertical-align:middle; width:8%; '>Balance after receipt</th>
        </tr>
        </thead>
        <tbody style='font-size:10px;'>
        @if($items->count() > 0)
            @foreach($items as $item)
            <tr>
            <th id='ponumber'>{{$item->po_number}}</th>
            <td id='podate'>{{$item->po_date}}</td>
            <td id='stockno'>{{$item->stock_no}}</td>
            <td id='type'>{{$item->item_type}}</td>
            <th id='unit'>{{$item->unit}}</th>
            <td id='description'>{{$item->item_description}}></td>
            <td id='quantity'>{{$item->quantity}}</td>
            <td id='unitcost'>WALA PA</td>
            <td id='remarks'>WALA PA</td>
            <td id='balance'>WALA PA</td>
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
            <!--table-->
        </div>
    </div>
</div>

<!--inventory-->
<div class=" mt-3">
<div class="text-start"> 
                    <div class="" style="margin-top:-10px; width:200px;  height:45px;">
                        <p style="font-size: 16px; margin-left:-110px; font-weight: bold;">B. STOCK-IN</p>
                    </div>
                </div>
            </div>
    </div>
<!--inventory-->


<!--for data set -->
<div class="container">
  
    <div class="row">
        <div class="col-12">
            <!--table-->
            <div class="data_table">
            <table id="example" class="table table-bordered" style="margin-left:-145px; margin-top:-30px; border:1px solid black">
        <thead style='font-size:12px; background-color:#000066;color:white;'>
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
        <tbody style='font-size:10px;'>
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
            <!--table-->
        </div>
    </div>
</div>

<!--inventory-->
<div class=" mt-3">
<div class="text-start"> 
                    <div class="" style="margin-top:-10px; width:200px;  height:45px;">
                        <p style="font-size: 16px; margin-left:-110px; font-weight: bold;">C. STOCK-OUT</p>
                    </div>
                </div>
            </div>
    </div>
<!--inventory-->


<!--for data set -->
<div class="container">
  
    <div class="row">
        <div class="col-12">
            <!--table-->
            <div class="data_table">
            <table id="example" class="table table-bordered" style="margin-left:-165px; margin-top:-30px; border:1px solid black">
        <thead style='font-size:10px; background-color:#000066;color:white;'>
            <tr>
            <th class='text-center' style='align-items:center;vertical-align:middle' scope="col">PO Number</th>
            <th class='text-center' style='align-items:center;vertical-align:middle;' scope="col">Date of PO</th>
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
        <tbody style='font-size:9px;'>
        @if($stockouts->count() > 0)
            @foreach($stockouts as $stockout)
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">{{$stockout->po_number}}</th>
            <td class='text-center' style='align-items:center; width:50px;'>{{$stockout->po_date}}</td>
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
            <!--table-->
        </div>
    </div>
</div>


     <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/28d81edfcb.js" crossorigin="anonymous"></script>

<!--for data set-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.7/b-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.js"></script>


<!-- table Library -->
<!--<script>
    $(document).ready(function(){
        var table = $('#example').DataTable({
        buttons:['copy', 'csv', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    }); -->
</script>
</body>
</html>