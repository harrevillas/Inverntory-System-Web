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
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                  <div>
                      <button type="button" class="btn btn-primary btn-icon-text btn-rounded btn-sm" data-toggle="modal" data-target="#add-company">
                          <i class="ti-plus btn-icon-prepend"></i>Add Order
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
                  <p class="card-title text-md-center text-xl-left">My Orders</p>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                  <div class="flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <div class="tabs">
                      <div class="active">All</div>
                      <div>Unpaid</div>
                      <div>To ship <span>5</span></div>
                      <div>Shipping <span>11</span></div>
                      <div>Completed</div>
                      <div>Cancellation</div>
                      <div>Return/Refund</div>
                      <div>Failed Delivery</div>
                    </div>
                    <div class="order-filter">
                      <div>
                          <label for="order-id">Order ID</label>
                          <input type="text" id="order-id" placeholder="Input order ID">
                      </div>
                      <div>
                          <label for="shipping-channel">Shipping Channel</label>
                          <select id="shipping-channel">
                              <option>All Channels</option>
                              <option>Standard Local</option>
                              <option>SPX Express</option>
                          </select>
                          <button>Apply</button>
                          <button>Reset</button>
                      </div>
                    </div>
                    <div class="orders">
                      <div class="order">
                          <div class="order-details">
                              <img src="product-image-url" alt="Product">
                              <div class="order-info">
                                  <div><strong>leochris21</strong></div>
                                  <div>BOHEMIAN ETHNIC FLORAL MAXI DRESS</div>
                                  <div>Variation: Yellow</div>
                                  <div>₱488</div>
                                  <div>Cash on Delivery</div>
                              </div>
                          </div>
                          <div class="order-actions">
                              <div>Cancelled</div>
                              <div>Cancelled by buyer</div>
                              <button>Check Details</button>
                          </div>
                      </div>
                      <div class="order">
                          <div class="order-details">
                              <img src="product-image-url" alt="Product">
                              <div class="order-info">
                                  <div><strong>kllllllx</strong></div>
                                  <div>CASUAL FRENCH RETRO VINTAGE DRESS</div>
                                  <div>Variation: White</div>
                                  <div>₱738</div>
                                  <div>Cash on Delivery</div>
                              </div>
                          </div>
                          <div class="order-actions">
                              <div>To ship</div>
                              <div>To avoid late shipment, please arrange drop-off / arrange pickup by 05/28/2024 (Tue).</div>
                              <button>Arrange Shipment</button>
                          </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include '../modals.php'; ?>
        <script type="text/javascript" src="../../js/custom/company.js"> </script>
        <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>   
  <?php include '../scripts.php'; ?>
  <button id="backToTopBtn" class="btn btn-primary back-to-top-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path fill="none" d="M0 0h24v24H0z"/>
      <path d="M12 2L0 12h5v10h14v-10h5L12 2zm6 17h-4v-4h-4v4H6l6-6 6 6z"/>
    </svg>
    <span>Back to Top</span>
  </button>

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

    /* Hide the text */
    .back-to-top-btn span {
        display: inline-block;
    }

    .tabs {
        display: flex;
        background-color: white;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        margin-top: 10px;
    }
    .tabs div {
        margin-right: 20px;
        cursor: pointer;
    }
    .tabs div.active {
        color: red;
    }
    .order-filter {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: white;
        border-bottom: 1px solid #ddd;
        margin-top: 10px;
    }
    .order-filter input, .order-filter select {
        padding: 5px;
        margin-right: 10px;
    }
    .orders {
        background-color: white;
        padding: 10px;
        margin-top: 10px;
    }
    .order {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }
    .order:last-child {
        border-bottom: none;
    }
    .order img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }
    .order-details {
        display: flex;
        align-items: center;
    }
    .order-info {
        margin-right: 20px;
    }
    .order-actions {
        display: flex;
        align-items: center;
    }
    .order-actions button {
        padding: 5px 10px;
        margin-left: 10px;
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
