<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <?php include '../navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar.php'; ?>
      <div class="main-panel" >
        <div class="content-wrapper" style="background-color:#bddcff;">
          <div class="row">
            <div class="col-md-8 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-Unit">
                          <i class="ti-plus btn-icon-prepend"></i>Add Unit
                      </button> 
                    </div>
                  <div>              
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Unit</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table  class="table table-hover" id="table_units">
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Name</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Back to top button -->
        <button id="backToTopBtn" class="btn btn-primary back-to-top-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z"/>
            <path d="M12 2L0 12h5v10h14v-10h5L12 2zm6 17h-4v-4h-4v4H6l6-6 6 6z"/>
          </svg>
          <span>Back to Top</span>
        </button>
        <?php include '../modals.php'; ?>
        <script type="text/javascript" src="../../js/custom/units.js"> </script>
        <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>
<?php include '../scripts.php'; ?>
<style>
/* CSS to position the back to top button */
.back-to-top-btn {
    position: fixed;
    bottom: 20px; /* Adjust as needed */
    right: 20px; /* Adjust as needed */
    z-index: 1000; /* Ensure button is above other content */
}

/* Style the arrow icon */
.back-to-top-btn svg {
    fill: white; /* Change the color as needed */
    width: 24px; /* Adjust size as needed */
    height: 24px; /* Adjust size as needed */
    margin-right: 5px; /* Adjust spacing between icon and text */
}
</style>
<script>
// JavaScript to handle back to top button functionality
document.addEventListener("DOMContentLoaded", function() {
    var backToTopBtn = document.getElementById('backToTopBtn');
    
    // Function to handle scrolling and showing/hiding back to top button
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            // Show back to top button
            backToTopBtn.style.display = 'block';
        } else {
            // Hide back to top button
            backToTopBtn.style.display = 'none';
        }
    });

    // Functionality to scroll back to top when back to top button is clicked
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo(0, 0);
    });
});
</script>
</body>
</html>
