<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="images/DOLE_picture.ico" type="image/x-icon">

  <!-- Bootstrap CSS -->
  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    
/*font */
.poppins-regular {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  *,
  ::after
  ::before {
    box-sizing: border-box;
  }

  body {
    font-family: "Poppins", sans-serif;
    font-size: 0.875rem;
    opacity: 1;
    overflow-y: scroll;
    margin: 0;
  }

  a {
    cursor: pointer;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
  }

  li {
    list-style: none;

  }

  h4{
    font-family: 'Poppins', sans-serif;
    font-size: 1.275rem;
    color: var(--bs-emphasis-color);
  }

  /*layout admin dashboard*/
  .wrapper {
    align-items: stretch;
    display: flex;
    width: 100%;
  }

  #welcomei {
    max-width: 150px;
    min-width: 150px;
    transition: all 0.35s ease-in-out;
  }

  #welcomes {
    max-width: 150px;
    min-width: 150px;
    transition: all 0.35s ease-in-out;
  }

  #sidebar {
    max-width: 244px;
    min-width: 244px;
    background: var(--bs-dark);
    transition: all 0.35s ease-in-out;
  }

  .main {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    min-width: 0;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    width: 100%;
    background: var(--bs-dark-bg-subtle);
  }

  /*sidebar elements */
  .sidebar-logo {
    padding: 1.15rem;
  }

  .sidebar-logo a {
    color: #e9ecef; 
    font-size: 1.15;
    font-weight: 600;
  }

  .sidebar-nav{
    flex-grow: 1;
    list-style: none;
    margin-bottom: 0;
    padding-left: 0;
    margin-left: 0;
  }

  .sidebar-header{
    color: #e9ecef;
    font-size: .75rem;
    padding: 1.5rem 1.5rem .375rem;
  }

  a.sidebar-link{
    padding: .625rem 1.625rem;
    color: #e9ecef;
    position: relative;
    display: block;
    font-size: 0.875rem; 
  }

  .sidebar-link[data-bs-toggle="collapse"]::after{
    border: solid;
    border-width: - .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
  }

  .sidebar-link[data-bs-toggle="collapse"].collapsed::after{
    transform: rotate(45deg);
    transition: all .2s ease-out;
  }

  .avatar {
    height: 40px;
    width: 40px;
  }

  .navbar-expand .navbar-nav {
    margin-left: auto;
    
  }

  .modal-dialog-wide {
      max-width: 80% !important;
  }

  .content{
    flex: 1;
    max-width: 100vw;
    width: 100vw;
  }

  @media (min-width:768px){
    .content{
      max-width: auto;
      width: auto;
    }
  }  

  .card{
    box-shadow: 0 0 .875rem 0 rgba(34, 46, 60, .05);
    margin-bottom: 24px;
  }

  .illustration {
    background-color: var(--bs-primary-bg-subtle);
    color: var(--bs-emphasis-color);
  }

  .illustration-img{
    max-width: 150px;
    width: 100%;
  }
  
  /*sidebar toggle */
  #sidebar.collapsed {
    margin-left: -252px;
  }

  #welcomei.collapsed {
    margin-top:-50px;
    margin-left: -77px;
    max-width: 200px;
    min-width: 200px;
  }
  #welcomes.collapsed {
    max-width: 190px;
    min-width: 190px;
  }

  #wtext {
    font-size:20px;
    font-weight:bold;
    transition: all 0.35s ease-in-out;
  }

  #wtext.collapsed {
    font-size:25px;
    width:300px;
  }

  #stext {
    font-size:15px;
    width: 300px;
    transition: all 0.35s ease-in-out;
  }

  #stext.collapsed{
    font-size:20px;
  }

  #wtext2 {
    font-size:20px;
    font-weight:bold;
    transition: all 0.35s ease-in-out;
  }

  #wtext2.collapsed {
    font-size:25px;
    width:300px;
  }

  #stext2 {
    font-size:15px;
    width: 300px;
    transition: all 0.35s ease-in-out;
  }

  #stext2.collapsed{
    font-size:20px;
  }

  .btn-group {
    padding: 10px;
  }

  .locked {
      pointer-events: none;
  }

  .people{
    background-color: #Ffffff;
  }
    /* Style the search input */
    .search-input {
            width: 300px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Change border color on focus */
        .search-input:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Style the search button */
        .search-button {
            padding: 10px 20px;
            border: 2px solid #007BFF;
            border-left: none;
            border-radius: 0 4px 4px 0;
            background-color: #007BFF;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Change background color on hover */
        .search-button:hover {
            background-color: #0056b3;
        }

        /* Style the search button on focus */
        .search-button:focus {
            outline: none;
        }
        .custom-icon {
          /* color: red;  Change icon color */
          font-size: 1.2em; /* Change icon size */
          margin-right: 5px;
        }
        .next-icon {
          color: black; /* Change icon color */
          font-size: 3em; /* Change icon size */
          margin-right: 5px;
        }


  /*pie */
  

  /*pie bar */
  </style>
</head>
<body>
  <div class="wrapper">
    <!--for sidebar-->
    <aside id="sidebar">
    <!--content sidebar-->
    <div class="h-100">
    <div class="sidebar-logo text-center">
      <img src="{{asset('images/DOLE_picture.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        <a href="#" style="font-size:20px; vertical-align:middle;" class = "text-center">DOLE 
        <p style="font-size:10px; vertical-align:middle;" >Misamis Oriental Provincial Field Office</p></a>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Admin
        </li>
        <!--sidebar items-->
        <li class="sidebar-item">
          <a href="/dashboard" class="sidebar-link">
            <i class="fa-solid fa-list pe-2"></i>
            Dashboard
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/Admin/StockIn" class="sidebar-link">
            <i class="fas fa-box pe-2"></i>
            Stock In
          </a>
        </li>
        <li class="sidebar-item">
          <a href="/Admin/StockOut" class="sidebar-link">
            <i class="fas fa-box-open pe-2"></i>
            Stock Out
          </a>
        </li>
        <!----> <!--for graph -->
        <!--same sa header
        <li class="sidebar-header">
          Multi Level Menu
        </li>
        <li class="sidebar-item">
        <a href="#"class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" 
          aria-expanded="false">
          <i class="fa-solid fa-share-nodes pe-2"></i>
          Multi Dropdown</a> 
        </li>
        #same sa dropdown sa graph
        -->
      </ul>
    </div>
  </aside> 
  <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom" >
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!----> <!--profile-->
        <div class="navbar-collapse navbar justify-content-end  " >
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="{{asset('images/profile3.png')}}" class="avatar img-fluid rounded" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">

                
              <form method="GET" action="">
                    @csrf

                    <a class="dropdown-item" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Profile') }}
                    </a>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form> 
              </div>
            </li>
          </ul>
        </div>
    </nav>

    
    <!--card that welcome admin-->
    <main class="content px-0 py-2">
        @yield('content')
    </main>
  </div>
</div>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/28d81edfcb.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

<script>
  function showNextPage() {
            // Hide the previous page
            document.getElementById("previousPage").style.display = "none";
            // Show the next page
            document.getElementById("nextPage").style.display = "block";
            // Scroll to the next page
            document.getElementById("nextPage").scrollIntoView();
        }

    </script>

<script> 
        
        $(document).ready(function() {
    $('#agentsubmitForm').on('click', function(e) {
      e.preventDefault(); // Prevent the form from submitting normally

      // Collect the form data
      var formData = $('#agentitemForm').serialize();

      // Submit the form data to the server using an AJAX request
      $.ajax({
        url: "{{route('store.item')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Form submitted successfully');
          $('#agentitemForm')[0].reset();
          $('#additemsmodal').modal('hide');
          location.reload();
          
        },
        error: function(xhr, status, error) {
            var errorObj = JSON.parse(xhr.responseText);
            alert(errorObj.error);
        }
      });
    });
 });

</script>

<script> 
        
        $(document).ready(function() {
    $('#agenteditsubmitForm').on('click', function(e) {
      e.preventDefault(); // Prevent the form from submitting normally

      // Collect the form data
      var formData = $('#agentedititemForm').serialize();

      // Submit the form data to the server using an AJAX request
      $.ajax({
        url: "{{route('edit.item')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Form submitted successfully');
          $('#agentedititemForm')[0].reset();
          $('#edititemsmodal').modal('hide');
          location.reload();
          
        },
        error: function(xhr, status, error) {
            var errorObj = JSON.parse(xhr.responseText);
            alert(errorObj.error);
        }
      });
    });
 });

</script>

<script> 
        
        $(document).ready(function() {
    $('#agentstocksubmitForm').on('click', function(e) {
      e.preventDefault(); // Prevent the form from submitting normally

      // Collect the form data
      var formData = $('#agentstockinForm').serialize();

      // Submit the form data to the server using an AJAX request
      $.ajax({
        url: "{{route('stockin')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Form submitted successfully');
          $('#agentstockinForm')[0].reset();
          $('#stockinmodal').modal('hide');
          location.reload();
          
        },
        error: function(xhr, status, error) {
            var errorObj = JSON.parse(xhr.responseText);
            alert(errorObj.error);
        }
      });
    });
 });

</script>

<script> 
        
        $(document).ready(function() {
    $('#agentstocksubmitForme').on('click', function(e) {
      e.preventDefault(); // Prevent the form from submitting normally

      // Collect the form data
      var formData = $('#agentstockinForme').serialize();

      // Submit the form data to the server using an AJAX request
      $.ajax({
        url: "{{route('stockin')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Form submitted successfully');
          $('#agentstockinForme')[0].reset();
          $('#stockinmodale').modal('hide');
          location.reload();
          
        },
        error: function(xhr, status, error) {
            var errorObj = JSON.parse(xhr.responseText);
            alert(errorObj.error);
        }
      });
    });
 });

</script>

<script> 
        
        $(document).ready(function() {
    $('#agentstockoutsubmitForm').on('click', function(e) {
      e.preventDefault(); // Prevent the form from submitting normally

      // Collect the form data
      var formData = $('#agentstockoutForm').serialize();

      // Submit the form data to the server using an AJAX request
      $.ajax({
        url: "{{route('stockout')}}",
        type: 'POST',
        data: formData,
        success: function(response) {
          console.log('Form submitted successfully');
          $('#agentstockoutForm')[0].reset();
          $('#stockoutmodal').modal('hide');
          location.reload();
          
        },
        error: function(xhr, status, error) {
            var errorObj = JSON.parse(xhr.responseText);
            alert(errorObj.error);
        }
      });
    });
 });

</script>

<script>
    $(document).ready(function() {
        $('#edititemsmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('edit');
            document.getElementById('itemid3').setAttribute('value', item.id);
            document.getElementById('ponumber5').setAttribute('value', item.par_ics);
            document.getElementById('podate5').setAttribute('value', item.date_acquired);
            document.getElementById('stockno5').setAttribute('value', item.stock_no);
            document.getElementById('unit5').setAttribute('value', item.unit);
            document.getElementById('description5').setAttribute('value', item.item_description);
            document.getElementById('quantity5').setAttribute('value', item.quantity);
            document.getElementById('unitcost5').setAttribute('value', item.unit_cost);
            document.getElementById('remarks5').setAttribute('value', item.status_remarks);
            document.getElementById('custname5').setAttribute('value', item.custodian_name);
                    // Set the selected option on the type select element
            var typeSelect = document.getElementById('type5');
            var itemType = item.item_type;
            if (itemType) {
                var options = typeSelect.options;
                for (var i = 0; i < options.length; i++) {
                    if (options[i].value === itemType) {
                        options[i].selected = true;
                        break;
                    }
                }
            }
        
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#detailsmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('unit');
            $('#ponumber').text(item.par_ics);
            $('#podate').text(item.stock_no);
            $('#stockno').text(item.date_acquired);
            $('#type').text(item.item_type);
            $('#unit').text(item.unit);
            $('#description').text(item.item_description);
            $('#quantity').text(item.quantity);
            $('#unitcost').text(item.unit_cost);
            $('#remarks').text(item.status_remarks);
            $('#balance').text(item.balance);

  
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#edetailsmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('unit');
            $('#ponumbere').text(item.par_ics);
            $('#podatee').text(item.stock_no);
            $('#stocknoe').text(item.date_acquired);
            $('#typee').text(item.unit_cost);
            $('#unite').text(item.item_description);
            $('#descriptione').text(item.status_remarks);
            $('#quantitye').text(item.custodian_name);
  
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#stockinmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('set');
            document.getElementById('itemid').setAttribute('value', item.id);
            document.getElementById('type1').setAttribute('value', item.item_type);
            document.getElementById('unit1').setAttribute('value', item.unit);
            document.getElementById('description1').setAttribute('value', item.item_description);
  
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#stockinmodale').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('set');
            document.getElementById('itemide').setAttribute('value', item.id);
            document.getElementById('estockno').setAttribute('value', item.stock_no);
            document.getElementById('type1e').setAttribute('value', item.item_type);
            document.getElementById('unit1e').setAttribute('value', item.unit);
            document.getElementById('description1e').setAttribute('value', item.item_description);
  
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#stockoutmodal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var item = button.data('list');
            document.getElementById('itemid2').setAttribute('value', item.id);
            document.getElementById('quantity2').setAttribute('value', item.quantity);
            document.getElementById('ponumber2').setAttribute('value', item.po_number);
            document.getElementById('podate2').setAttribute('value', item.po_date);
            document.getElementById('stockno2').setAttribute('value', item.stock_no);
            document.getElementById('description2').setAttribute('value', item.item_description);
            document.getElementById('type2').setAttribute('value', item.item_type);
            document.getElementById('unit2').setAttribute('value', item.unit);
  
        });
    });
</script>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Your custom script -->

</body>
</html>