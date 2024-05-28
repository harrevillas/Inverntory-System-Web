<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <?php include '../navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper" style="background-color:#bddcff;">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-ItemRawMaterial">
                          <i class="ti-plus btn-icon-prepend"></i>Add Item Raw Material
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
                  <p class="card-title text-md-center text-xl-left">Item Raw Material</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table class="table table-hover" id="table_itemrawmaterial">
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Product Name</th>
                                  <th>Material Name</th>
                                  <th>Amount</th>
                                  <th>Encoded By</th>
                                  <th>Date Encoded</th>
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
          <?php include '../modals.php'; ?>
            <script type="text/javascript" src="../../js/custom/itemrawmaterial.js"> </script>
          <?php include '../footer.php'; ?>
          <!-- Back to top button -->
          <button id="backToTopBtn" class="btn btn-primary back-to-top-btn">Back to Top</button>
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
