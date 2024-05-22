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
    margin-left: -264px;
  }

  .btn-group {
    padding: 10px;
  }

  .people{
    background-color: #Ffffff;
  }
  /*search */
  
  .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
  /*table */
  .table {
  /*... */
  overflow-x: auto;
  /*... */
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
  margin: 0 auto;
}

.table::-webkit-scrollbar {
  display: none;  /* Safari and Chrome */
}

.th {
  /*... */
  text-align: center;
  /*... */
  vertical-align: middle;
  align-items: center;
  /*... */
}
.td {
  /*... */
  text-align: center;
  align-items: center;
  /*... */
}
  </style>
</head>
<body>
  <div class="wrapper">
    <!--for sidebar-->
    <aside id="sidebar">
    <!--content sidebar-->
    <div class="h-100">
      <div class="sidebar-logo">
      <img src="{{asset('image/dole-logo.png')}}" alt="Logo" width="30" height="24" class="ml-3 d-inline-block align-text-top">
        <a href="#">DOLE X INVENTORY</a>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Admin
        </li>
        <!--sidebar items-->
        <li class="sidebar-item">
          <a href="#" class="sidebar-link">
            <i class="fa-solid fa-list pe-2"></i>
            Dashboard
          </a>
        </li>
        <!----> <!--for graph -->
        <li class="sidebar-item">
          <a href="#"class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" 
          aria-expanded="false">
          <i class="fa-solid fa-chart-line pe-2"></i>
          Graph</a>
          <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="/" class="sidebar-link">Stock In</a>
            </li>
            <li class="sidebar-item">
              <a href="#" class="sidebar-link">Stock Out</a>
            </li>
          </ul>
        </li>
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
                <img src="{{asset('image/cat.jpg')}}" class="avatar img-fluid rounded" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="" class="dropdown-item">Profile</a>
                <a href="" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </div>
    </nav>

    
    <!--card that welcome admin-->
    <main class="content px-0 py-2">
      <div class="container-fluid">
        <div class="mb-1 d-flex justify-content-between">
          <h3>Stock in</h3>
           <!--for dropdown button for days total-->
        <div class="btn-group">
          <button class="btn btn-primary btn-sm dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Supplies
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/stockInSupplies" id="Supplies">Supplies</a>
            <a class="dropdown-item" href="/stockInEquipment" id="Equipment">Equipment</a>
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
                  
        <table class="table " >
        <thead class="thead-dark align-items-center">
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
        <tbody>
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">2024-03-191</th>
            <td class='text-center' style='align-items:center;'>18-Mar-2024</td>
            <td class='text-center' style='align-items:center;' >n/a</td>
            <td class='text-center' style='align-items:center;'>Supply</td>
            <td class='text-center' style='align-items:center;'>pc</td>
            <td class='text-center' style='align-items:center;'>Tarpaulin 5x8ft</td>
            <td class='text-center' style='align-items:center;'>2</td>
            <td class='text-center' style='align-items:center;'>600.00</td>
            <td class='text-center' style='align-items:center;'> </td>
            <td class='text-center' style='align-items:center;'>1</td>
            </tr>
            <tr>
            <th class='text-center' style='align-items:center;' scope="row">2024-03-191</th>
            <td class='text-center' style='align-items:center;'>18-Mar-2024</td>
            <td class='text-center' style='align-items:center;'>n/a</td>
            <td class='text-center' style='align-items:center;'>Supply</td>
            <td class='text-center' style='align-items:center;'>pc</td>
            <td class='text-center' style='align-items:center;'>White Sticker Paper(A4, 10pcs/Pack)</td>
            <td class='text-center' style='align-items:center;'>3</td>
            <td class='text-center' style='align-items:center;'>90.00</td>
            <td class='text-center' style='align-items:center;'> </td>
            <td class='text-center' style='align-items:center;'>0</td>
            </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div>
        <!--table-->    
      </div>
    </main>
  </div>
</div>  

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/28d81edfcb.js" crossorigin="anonymous"></script>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Your custom script -->
<script>
  // Function to handle dropdown item click
  function handleDropdownItemClick(event) {
    // Get the text content of the clicked dropdown item
    const selectedItem = event.target.textContent;
    // Set the text content of the dropdown button to the selected item
    document.getElementById("dropdownMenuButton").textContent = selectedItem;
  }

  // Add event listeners to dropdown items
  document.getElementById("Supplies").addEventListener("click", handleDropdownItemClick);
  document.getElementById("Equipment").addEventListener("click", handleDropdownItemClick);

//search bar
import { Autocomplete, Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });

const basicAutocomplete = document.querySelector('#search-autocomplete');
const data = ['One', 'Two', 'Three', 'Four', 'Five'];
const dataFilter = (value) => {
  return data.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

new Autocomplete(basicAutocomplete, {
  filter: dataFilter
});
</script>
</body>
</html>