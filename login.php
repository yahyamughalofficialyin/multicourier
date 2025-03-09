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
        <div class="car-road">
            <div class="car">
                <div class="car-top">
                    <div class="window"></div>
                </div>
                <div class="car-base"></div>
                <div class="wheel-left wheel">
                    <div class="wheel-spike"></div>
                    <div class="wheel-center"></div>
                </div>
                <div class="wheel-right wheel">
                    <div class="wheel-spike"></div>
                    <div class="wheel-center"></div>
                </div>
                <div class="head-light"></div>
            </div>
            <div class="road"></div>
        </div>
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
                                    <h3 class="tw-mb-4 cursor-big">Login</h3>
                                    <p class="text-neutral-1000 cursor-small max-w-444-px">
                                        Enter Your Credentials to Login to our website
                                    </p>
                                    <form id="loginForm" action="#" class="tw-mt-70-px d-flex flex-column tw-gap-64-px">
                                        <div class="position-relative">
                                            <input type="text" id="identifier" name="identifier" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Email or Phone*" required>
                                            <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                                                <i class="ph-bold ph-user"></i>
                                            </span>
                                        </div>
                                        <!-- Error message container for identifier -->
                                        <div id="identifier_error" class="error-message text-danger"></div>

                                        <div class="position-relative">
                                            <input type="password" id="password" name="password" class="cursor-small focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Password*" required>
                                            <span class="tw-text-xl d-flex text-main-two-600 position-absolute top-0 tw-start-0">
                                                <i class="ph-bold ph-lock"></i>
                                            </span>
                                        </div>
                                        <!-- Error message container for password -->
                                        <div id="password_error" class="error-message text-danger"></div>

                                        <div class="">
                                            <button type="submit" class="cursor-small btn btn-main hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0" data-block="button">
                                                <span class="button__flair"></span>
                                                <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                                    <i class="ph-bold ph-paper-plane-tilt"></i>
                                                </span>
                                                <span class="button__label">Login</span>
                                            </button>
                                        </div>
                                        <div class="mt-5">
                                            <p>Don't Have an Account?
                                                <a href="register.php" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                                                    Register
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
    <!-- swiper slider Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Split Text -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- Scroll Trigger -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- Gsap js -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- custom gsap -->
    <script src="assets/js/custom-gsap.js"></script>
    <!-- aos -->
    <script src="assets/js/aos.js"></script>
    <!-- Circle Progress bar -->
    <script src="assets/js/animated-radial-progress.js"></script>
    <!-- counter up -->
    <script src="assets/js/counterup.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- marquee -->
    <script src="assets/js/jquery.marquee.min.js"></script>
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

        // Live validation for the identifier field
        $("#identifier").on("input", function() {
            let idValue = $(this).val().trim();
            if (idValue === "") {
                $("#identifier_error").text("Email or Phone is required.");
            } else {
                $("#identifier_error").text("");
            }
        });

        // Live validation for the password field
        $("#password").on("input", function() {
            let pass = $(this).val();
            if (pass === "") {
                $("#password_error").text("Password is required.");
            } else {
                $("#password_error").text("");
            }
        });

        // Submit the login form via AJAX
        $("#loginForm").submit(function(e) {
            e.preventDefault();

            // Clear previous error messages
            $("#identifier_error").text("");
            $("#password_error").text("");

            let identifier = $("#identifier").val().trim();
            let password = $("#password").val();

            // Basic client-side validation
            if (identifier === "") {
                $("#identifier_error").text("Email or Phone is required.");
                return;
            }
            if (password === "") {
                $("#password_error").text("Password is required.");
                return;
            }

            // Send AJAX request to loginrequest.php
            $.ajax({
                url: "loginrequest.php",
                type: "POST",
                dataType: "json",
                data: {
                    identifier: identifier,
                    password: password
                },
                success: function(response) {
                    if (response.success) {
                        showToast(response.message, "green");
                        // Optionally, redirect after successful login (e.g., to a index)
                        setTimeout(function() {
                            window.location.href = "index.php";
                        }, 3000);
                    } else {
                        // If there are field-specific errors, show them below the inputs
                        if (response.errors) {
                            if (response.errors.identifier) {
                                $("#identifier_error").text(response.errors.identifier);
                            }
                            if (response.errors.password) {
                                $("#password_error").text(response.errors.password);
                            }
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