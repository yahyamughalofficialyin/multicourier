<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "head.php"; ?>
  <!-- Toastify CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <style>
    /* Style for error messages */
    .error-message {
      font-size: 0.9rem;
    }
  </style>
</head>

<body>
  <!--==================== Preloader Start ====================-->
  <div class="preloader bg-white tw-h-screen justify-content-center align-items-center tw-z-999 position-fixed top-0 tw-start-0 w-100 h-100">
    <!-- (Preloader content…) -->
  </div>
  <!--==================== Preloader End ====================-->
  <div hidden>
    <?php include "header.php"; ?>
  </div>

  <!-- ==================== Breadcrumb Start Here ==================== -->
  <section class="breadcrumb py-140 mb-0 bg-img" data-background-image="assets/images/thumbs/breadcrumb-bg.jpg">
    <div class="container">
      <div class="text-center">
        <section class="py-140">
          <div class="container">
            <div class="row gy-5">
              <div class="col-lg-3"></div>
              <div class="col-lg-6">
                <div class="bg-neutral-50 py-60 tw-px-54-px">
                  <h3 class="tw-mb-4 cursor-big">Register</h3>
                  <p class="text-neutral-1000 cursor-small max-w-444-px">
                    Register Yourself to give us a chance to serve you
                  </p>
                  <form id="registerForm" action="#" class="tw-mt-70-px d-flex flex-column tw-gap-64-px">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="position-relative">
                          <input type="text" id="first_name" name="first_name" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="First Name*" required>
                          <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                            <i class="ph-bold ph-user"></i>
                          </span>
                        </div>
                        <!-- Error message container -->
                        <div id="first_name_error" class="error-message text-danger"></div>
                      </div>
                      <div class="col-sm-6">
                        <div class="position-relative">
                          <input type="text" id="last_name" name="last_name" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Last Name*" required>
                          <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                            <i class="ph-bold ph-user"></i>
                          </span>
                        </div>
                        <!-- Error message container -->
                        <div id="last_name_error" class="error-message text-danger"></div>
                      </div>
                    </div>
                    <div class="position-relative">
                      <input type="email" id="email" name="email" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Email Address*" required>
                      <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                        <i class="ph-bold ph-envelope"></i>
                      </span>
                    </div>
                    <!-- Error message container -->
                    <div id="email_error" class="error-message text-danger"></div>

                    <div class="position-relative">
                      <input type="text" id="phone" name="phone" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Phone Number*" required>
                      <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                        <i class="ph-bold ph-phone"></i>
                      </span>
                    </div>
                    <!-- Error message container -->
                    <div id="phone_error" class="error-message text-danger"></div>

                    <!-- Password Field -->
                    <div class="position-relative">
                      <input type="password" id="password" name="password" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Password*" required>
                      <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                        <i class="ph-bold ph-lock"></i>
                      </span>
                    </div>
                    <!-- Error message container -->
                    <div id="password_error" class="error-message text-danger"></div>

                    <div class="">
                      <button type="submit" class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0" data-block="button">
                        <span class="button__flair"></span>
                        <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                          <i class="ph-bold ph-paper-plane-tilt"></i>
                        </span>
                        <span class="button__label">Register</span>
                      </button>
                    </div>
                    <div class="mt-5">
                      <p>Already Have an Account?
                        <a href="login.php" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                          Login
                        </a>
                      </p>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-3"></div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- ==================== Breadcrumb End Here ==================== -->

  <!-- jQuery js -->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <!-- Toastify JS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <!-- phosphor Js -->
  <script src="assets/js/phosphor-icon.js"></script>
  <!-- Bootstrap Bundle Js -->
  <script src="assets/js/boostrap.bundle.min.js"></script>
  <!-- (other scripts as needed) -->
  <!-- main js -->
  <script src="assets/js/main.js"></script>

  <script>
    // Helper function to show Toastify notifications
    function showToast(message, color) {
      Toastify({
        text: message,
        backgroundColor: color,
        duration: 3000
      }).showToast();
    }

    // Regular expressions for validation
    const nameRegex = /^[A-Za-z ]+$/;
    const phoneRegex = /^[0-9]+$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Live validation for First Name
    $("#first_name").on("input", function() {
      const firstName = $(this).val().trim();
      if (firstName === "") {
        $("#first_name_error").text("First name is required.");
      } else if (!nameRegex.test(firstName)) {
        $("#first_name_error").text("Only letters and spaces allowed.");
      } else {
        $("#first_name_error").text("");
      }
    });

    // Live validation for Last Name
    $("#last_name").on("input", function() {
      const lastName = $(this).val().trim();
      if (lastName === "") {
        $("#last_name_error").text("Last name is required.");
      } else if (!nameRegex.test(lastName)) {
        $("#last_name_error").text("Only letters and spaces allowed.");
      } else {
        $("#last_name_error").text("");
      }
    });

    // Live validation for Email (pattern check) and uniqueness (AJAX check on blur)
    $("#email").on("input", function() {
      const email = $(this).val().trim();
      if (email === "") {
        $("#email_error").text("Email is required.");
      } else if (!emailRegex.test(email)) {
        $("#email_error").text("Invalid email format.");
      } else {
        $("#email_error").text("");
      }
    }).on("blur", function() {
      const email = $(this).val().trim();
      if (email !== "" && emailRegex.test(email)) {
        // AJAX check for uniqueness
        $.ajax({
          url: "live_validate.php",
          type: "POST",
          dataType: "json",
          data: {
            field: "email",
            value: email
          },
          success: function(response) {
            if (!response.success) {
              $("#email_error").text(response.message);
            }
          },
          error: function() {
            $("#email_error").text("Error checking email uniqueness.");
          }
        });
      }
    });

    // Live validation for Phone (pattern check) and uniqueness (AJAX check on blur)
    $("#phone").on("input", function() {
      const phone = $(this).val().trim();
      if (phone === "") {
        $("#phone_error").text("Phone number is required.");
      } else if (!phoneRegex.test(phone)) {
        $("#phone_error").text("Only digits allowed.");
      } else {
        $("#phone_error").text("");
      }
    }).on("blur", function() {
      const phone = $(this).val().trim();
      if (phone !== "" && phoneRegex.test(phone)) {
        // AJAX check for uniqueness
        $.ajax({
          url: "live_validate.php",
          type: "POST",
          dataType: "json",
          data: {
            field: "phone",
            value: phone
          },
          success: function(response) {
            if (!response.success) {
              $("#phone_error").text(response.message);
            }
          },
          error: function() {
            $("#phone_error").text("Error checking phone uniqueness.");
          }
        });
      }
    });

    // Live validation for Password length
    $("#password").on("input", function() {
      const password = $(this).val();
      if (password === "") {
        $("#password_error").text("Password is required.");
      } else if (password.length < 8) {
        $("#password_error").text("At least 8 characters required.");
      } else {
        $("#password_error").text("");
      }
    });

    // Final submission via AJAX after checking that no live validation errors exist
    $("#registerForm").submit(function(e) {
      e.preventDefault();

      // Optionally, perform a final check to ensure no error messages are visible
      if ($("#first_name_error").text() || $("#last_name_error").text() || $("#email_error").text() || $("#phone_error").text() || $("#password_error").text()) {
        showToast("Please fix the errors in the form before submitting.", "red");
        return;
      }

      var formData = {
        first_name: $("#first_name").val().trim(),
        last_name: $("#last_name").val().trim(),
        email: $("#email").val().trim(),
        phone: $("#phone").val().trim(),
        password: $("#password").val()
      };

      $.ajax({
        url: "registerrequest.php",
        type: "POST",
        data: formData,
        dataType: "json",
        success: function(response) {
          if (response.success) {
            showToast(response.message, "green");
            // After 3 seconds, redirect to login.php
            setTimeout(function() {
              window.location.href = "login.php";
            }, 3000);
          } else {
            // Display field-specific errors returned by the server
            if (response.errors) {
              $.each(response.errors, function(key, message) {
                $("#" + key + "_error").text(message);
              });
            }
            if (response.message) {
              showToast(response.message, "red");
            }
          }
        },
        error: function() {
          showToast("An error occurred. Please try again.", "red");
        }
      });
    });
  </script>
</body>

</html>