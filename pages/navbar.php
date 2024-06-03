<!-- partial:../../partials/_navbar.html -->
<head>
  <style>
    .navbar {
      height: 9%; /* Adjust the height as needed */
    }

    .navbar-brand img {
      width:50px;
      height: auto;
      display: block;
      margin-top: 3px;
      object-fit: contain;
      transform: scale(1.5);
    }

    .navbar-brand {
      display: flex;
      align-items: center;
    }

    .brand-text {
      font-size: 18px;
      margin-left: -5px;
      display: flex;
    }

    .brand-address {
      color: #E2A626;
      font-size: 0.7em; /* Smaller font size */
      margin-top: 3px; /* Add some margin between the text and the address */
      margin-left: -5px;
      text-align: center; /* Center the text */
      display: flex;
    }

    /* Style rule to make the current date and time white */
    #currentDateTime {
      color: #E2A626; /* White color */
      position: fixed;
      right: -80%;
      font-size: 12px;
      margin-top: -13px;

    }
    
    /* Style rule to make the SVG white */
    svg {
      fill: #E2A626; /* White color */
    }

    .nav-link {
      color: #E2A626;
      font-size: 20px;
      margin-left: 80px;
    }

    .hover-text {
    display: none; /* Hide hover text by default */
    font-size: 15px;
    
}

.navbar-toggler:hover .hover-text {
    display: inline-block; /* Show hover text when hovering over the button */
}

  </style>
</head>

<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color:#414242;">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background-color:#414242;">
    <a class="navbar-brand brand-logo" href="../product/product.php">  
      <img src="../../images/head/seles.png" alt="Logo" class="logo hide-on-toggle">
    </a>

    <div>
      <span class="brand-text logo-lg hide-on-toggle" style="color:#E2A626;"><b>Seles Apparel</b></span> 
      <h1 class="brand-address hide-on-toggle">1684 F. Varona Street</h1> <!-- Added address -->
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color:#414242;">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize" onclick="toggleNavbar()">
      <span class="ti-view-list"></span>
      <span class="hover-text">Hover</span>
    </button>
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="background-color:#414242;">

   <a class="nav-link" href="../dashboard/dashboard.php">
       <i class="ti-shield menu-icon" title="Dashboard"></i>
    </a> 
   <!-- <a class="nav-link" href="../company/company.php">
        <i class="ti-flag menu-icon" title="Supplier"></i>
    </a> -->
    <a class="nav-link" href="../product/product.php">
        <i class="ti-shopping-cart menu-icon" title="Product"></i>
    </a>
    <a class="nav-link" href="../unit/unit.php">
        <i class="ti-layers menu-icon" title="Variant"></i>
    </a>
    <a class="nav-link" href="../category/category.php">
        <i class="ti-layers-alt menu-icon" title="Category"></i>
    </a>
    <a class="nav-link" href="../invoice/invoice.php">
        <i class="ti-shopping-cart-full menu-icon" title="Invoice"></i>
    </a>
    <a class="nav-link" href="../sales/sales.php">
        <i class="ti-bar-chart-alt menu-icon" title="Sales"></i>
    </a>
    <a class="nav-link" href="../users/users.php">
        <i class="ti-user menu-icon" title="Users"></i>
    </a>

  </div>

  <span id="currentDateTime" class="dropdown-item"></span>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <!-- Replace the img tag with the SVG avatar icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M21.5 12l-3.65-3.65 1.41-1.41L24.92 12l-6.06 6.06-1.41-1.41L21.5 12zM9 3h-7c-.55 0-1 .45-1 1v16c0 .55.45 1 1 1h7v-2H9V5h7V3H9zm4 8l-1.41 1.41L14.08 12l-4.47-4.47L10 7.05 14.05 11 10 14.05 10.05 15 14.61 18.57 16 17.18 12.82 14H22v-4h-9.18L16 8.82 14.61 7.43 10.05 12 10 11z"/>
            <path fill="none" d="M0 0h24v24H0V0z"/>
          </svg>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="../login/login.php">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li> 
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center brand-text logo-lg" type="button" data-toggle="offcanvas">
      <span class="ti-view-list"></span>
    </button>
  </div>
</nav>

<script>

  function updateCurrentDateTime() {
    var currentDate = new Date();
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    var dateString = currentDate.toLocaleDateString('en-US', options);
    var timeString = currentDate.toLocaleTimeString('en-US');
    document.getElementById('currentDateTime').textContent = dateString + ' ' + timeString;
  }

  // Update current date and time every second
  setInterval(updateCurrentDateTime, 1000);
  var isHidden = false;

  function toggleNavbar() {
    var elementsToToggle = document.querySelectorAll('.hide-on-toggle');
    isHidden = !isHidden;
    elementsToToggle.forEach(function(element) {
      element.style.display = isHidden ? 'none' : 'block';
    });
  }
</script>
<!-- partial -->
