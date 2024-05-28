<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include '../navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include '../sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel" >
        <div class="content-wrapper" style="background-color:#bddcff;">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Audit Log</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table id='example1' class="table table-hover" >
                          <thead style="font-size:10px">
                              <tr>
                                  <th>User</th>
                                  <th>Action</th>
                                  <th>Product</th>
                                  <th>Date Recorded</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>Data</td>
                                  <td>Data</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
          <?php include '../modals.php'; ?>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
          <?php include '../footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    <!-- Back to top button -->
    <button id="backToTopBtn" class="btn btn-primary back-to-top-btn">Back to Top</button>
  </div>
  <!-- container-scroller -->

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
