<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0" style="background-color:#bddcff;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>SALES AND INVENTORY SYSTEM</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" id="loginForm">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="usertype">User Type:</label>
                  <select class="form-control" id="usertype">
                    <option value="Admin">Admin</option>
                    <option value="Guest">Guest</option>
                  </select>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                </div>
              </form>
              <div id="loginMessage"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault();

      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;
      var usertype = document.getElementById('usertype').value;

      if (username === "" || password === "") {
        document.getElementById('loginMessage').innerHTML = '<div class="alert alert-danger">All fields are required</div>';
        return;
      }

      var xhr = new XMLHttpRequest();
      xhr.open("POST", "http://localhost/Inverntory-System-Web/pages/config/api/login.php", true);
      xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          var response = JSON.parse(xhr.responseText);
          if (xhr.status === 200) {
            document.getElementById('loginMessage').innerHTML = '<div class="alert alert-success">' + response.message + '</div>';
            // Redirect to appropriate dashboard based on user type
            setTimeout(function() {
              if (usertype === "Guest") {
                window.location.href = "../dashboard_guest/dashboard_guest.php";
              } else if (usertype === "Admin") {
                window.location.href = "../dashboard/dashboard.php";
              }
            }, 1000);
          } else {
            document.getElementById('loginMessage').innerHTML = '<div class="alert alert-danger">' + response.error + '</div>';
          }
        }
      };
      xhr.send(JSON.stringify({ "username": username, "password": password, "usertype": usertype }));
    });
  </script>
</body>
</html>
