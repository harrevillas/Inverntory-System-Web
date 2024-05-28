<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Seles Apparel</title>
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Add your logo CSS if needed -->
  <style>
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
      font-size: 1.2em;
      margin-left: 10px;
      color: #d4d4d4;
    }
    
    .brand-address {
      color: #E2A626;
      font-size: 0.7em; /* Smaller font size */
      margin-top: 3px; /* Add some margin between the text and the address */
      margin-left: 15px;
      text-align: center; /* Center the text */
      display: flex;
    }
    
    #currentdateTime {
      color: #E2A626; /* White color */
      position: fixed;
      right: -80%;
      font-size: 12px;
      margin-top: -13px;

    }
    
  </style>
</head>

<!-- partial:../../partials/_navbar.html -->
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
  <span id="currentdateTime" class="dropdown-item"></span>
    
  
  </div>
</nav>
<script>
  function updateCurrentDateTime() {
    var currentDate = new Date();
    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    var dateString = currentDate.toLocaleDateString('en-US', options);
    var timeString = currentDate.toLocaleTimeString('en-US');
    document.getElementById('currentdateTime').textContent = dateString + ' ' + timeString;
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

