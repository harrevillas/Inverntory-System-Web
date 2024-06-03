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
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Category Card Example for Dresses -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Dresses</h5>
                  <p class="card-text">Find a variety of stylish dresses for any occasion.</p>
                  <button class="btn btn-primary btn-sm" onclick="loadDataAndShowProducts('dresses')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16" style="fill: white;">
                      <path fill-rule="evenodd" d="M11 8a.5.5 0 0 1-.5.5H4.707l2.147 2.146a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L4.707 7.5H10.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    Show Products
                  </button>
                </div>
              </div>
            </div>
            <!-- Category Card Example for Plus Size -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Plus Size</h5>
                  <p class="card-text">Explore our collection of fashionable plus-size clothing.</p>
                  <button class="btn btn-primary btn-sm" onclick="loadDataAndShowProducts('Plus Size')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16" style="fill: white;">
                      <path fill-rule="evenodd" d="M11 8a.5.5 0 0 1-.5.5H4.707l2.147 2.146a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L4.707 7.5H10.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    Show Products
                  </button>
                </div>
              </div>
            </div>
            <!-- Category Card Example for Skirts -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Skirts</h5>
                  <p class="card-text">Browse through our latest skirt designs and styles.</p>
                  <button class="btn btn-primary btn-sm" onclick="loadDataAndShowProducts('skirts')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16" style="fill: white;">
                      <path fill-rule="evenodd" d="M11 8a.5.5 0 0 1-.5.5H4.707l2.147 2.146a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L4.707 7.5H10.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    Show Products
                  </button>
                </div>
              </div>
            </div>
            <!-- Category Card Example for Tops -->
            <div class="col-md-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Tops</h5>
                  <p class="card-text">Discover a range of trendy tops for every occasion.</p>
                  <button class="btn btn-primary btn-sm" onclick="loadDataAndShowProducts('tops')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16" style="fill: white;">
                      <path fill-rule="evenodd" d="M11 8a.5.5 0 0 1-.5.5H4.707l2.147 2.146a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L4.707 7.5H10.5a.5.5 0 0 1 .5.5z"/>
                    </svg>
                    Show Products
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- Products Section -->
          <div id="products-section" style="display: none;">
            <!-- Products will be displayed here -->
          </div>
        </div>
        <?php include '../modals.php'; ?>
        <script type="text/javascript" src="../../js/custom/product.js"></script>
        <?php include '../footer.php'; ?>
      </div>
    </div>
  </div>

  <?php include '../scripts.php'; ?>
  <!-- Back to top button -->
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
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }

    /* Style the arrow icon */
    .back-to-top-btn svg {
      fill: white;
      width: 24px;
      height: 24px;
      margin-right: 5px;
    }

    /* Product grid styles */
    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-card {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      flex: 1 0 calc(25% - 20px);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      max-width: 250px; /* Ensure uniform size */
    }

    .product-card h3 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      text-align: center;
    }

    .product-card p {
      font-size: 1rem;
      margin-bottom: 5px;
      text-align: center;
    }
  </style>
  <script>
    // JavaScript to handle back to top button functionality
    document.addEventListener("DOMContentLoaded", function() {
      var backToTopBtn = document.getElementById('backToTopBtn');
      
      window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
          backToTopBtn.style.display = 'block';
        } else {
          backToTopBtn.style.display = 'none';
        }
      });

      backToTopBtn.addEventListener('click', function() {
        window.scrollTo(0, 0);
      });
    });

    // Load JSON data before showing products
    function loadDataAndShowProducts(category) {
      var apiUrl = "http://localhost/Inverntory-System-Web/pages/config/api/read_product.php";

      fetch(apiUrl)
        .then(response => response.json())
        .then(json => {
          showProducts(category, json);
        })
        .catch(error => {
          console.error('Error fetching JSON data:', error);
        });
    }

    function showProducts(category, json) {
      var productsSection = document.getElementById('products-section');
      productsSection.style.display = 'block';
      productsSection.innerHTML = '';

      var filteredProducts = json.filter(function(product) {
        return product.cat_name.toLowerCase() === category.toLowerCase();
      });

      if (filteredProducts.length > 0) {
        var productGrid = document.createElement('div');
        productGrid.classList.add('product-grid');

        filteredProducts.forEach(function(product) {
          var productCard = document.createElement('div');
          productCard.classList.add('product-card');
          
          var productName = document.createElement('h3');
          productName.textContent = product.full_name;

          var productPrice = document.createElement('p');
          // Check if sales_price is a numeric value before formatting
          if (!isNaN(product.sales_price)) {
            productPrice.textContent = 'Price: ₱' + parseFloat(product.sales_price).toFixed(2);
          } else {
            productPrice.textContent = 'Price: Not available';
          }

          var productStock = document.createElement('p');
          productStock.textContent = 'Stock Quantity: ' + product.stock_quantity;

          var productUnit = document.createElement('p');
          // Assuming the JSON data includes the name property for units
          productUnit.textContent = 'Variant: ' + product.name; // Displaying unit name

          // Append product information to the product card
          productCard.appendChild(productName);
          productCard.appendChild(productPrice);
          productCard.appendChild(productStock);
          productCard.appendChild(productUnit);

          // Append the product card to the product grid
          productGrid.appendChild(productCard);
        });

        // Append the product grid to the products section
        productsSection.appendChild(productGrid);
      } else {
        // If no products found for the category, display a message
        productsSection.innerHTML = '<p>No products found for ' + category + '</p>';
      }
    }
  </script>
</body>
</html>
