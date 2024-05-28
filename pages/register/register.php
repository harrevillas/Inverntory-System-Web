<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4>SALES AND INVENTORY SYSTEM</h4>
              <h6 class="font-weight-light">Please fill out the spaces below.</h6>
              <form id="registerForm" class="pt-3">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="id" placeholder="ID">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="middleName" placeholder="Middle Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="userType" placeholder="User Type">
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Register</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="../login/login.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#registerForm").submit(function(event) {
        event.preventDefault();
        var id = $("#id").val();
        var firstName = $("#firstName").val();
        var middleName = $("#middleName").val();
        var lastName = $("#lastName").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var userType = $("#userType").val();

        var data = {
          user_id: id,
          f_name: firstName,
          m_name: middleName,
          l_name: lastName,
          username: username,
          password: password,
          usertype: userType
        };

        $.ajax({
          type: "POST",
          contentType: "application/json",
          url: "register.php", // Replace with your API endpoint
          data: JSON.stringify(data),
          success: function(response) {
            console.log(response);
            // You can handle success response here
          },
          error: function(xhr, textStatus, errorThrown) {
            console.error(xhr.responseText);
            // You can handle error response here
          }
        });
      });
    });
  </script>
</body>

</html>
