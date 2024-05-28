
<!DOCTYPE html>
<html lang="en">
<?php include '../head.php'; ?>
<body>
  <div class="container-scroller">
    <?php include '../navbar_guest.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../sidebar_guest.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper" style="background-color:#bddcff;">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-Invoice">
                          <i class="ti-plus btn-icon-prepend"></i>Add Invoice
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
                  <p class="card-title text-md-center text-xl-left">Invoice</p>
                  <div class=" flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                      <table class="table table-hover" id="table_invoice">
                          <thead style="font-size:10px">
                              <tr>
                                  <th>Order ID</th>
                                  <th>Product ID</th>
                                  <th>Product Name</th>
                                  <th>Customer Name</th>
                                  <th>Total Amount</th>
                                  <th>Status</th>
                                  <th>Date Recorded</th>
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
             <script type="text/javascript" src="../../js/custom/invoice.js"> </script>
          <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>
<?php include '../scripts.php'; ?>
</body>
</html>

