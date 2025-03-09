<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
</head>

<body class="bg-dark">

    <?php include "header.php"; ?>

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <section class="breadcrumb py-140 tw-pt-206-px mb-0 bg-img" data-background-image="assets/images/thumbs/breadcrumb-bg.jpg">
        <div class="container mt-5">
            <div class="text-center mt-5">
                <span class="splitTextStyleTwo text-main-600 border-bottom border-main-600 fst-italic fw-bold tw-text-lg cursor-small">About Us</span>
                <h1 class="splitTextStyleOne text-white tw-mt-1 cursor-big"> About Us</h1>
            </div>
        </div>
    </section>
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!-- ================================ Quate Section Start ========================== -->
    <section class="quate bg-img tw-mb-9 position-relative mb-5 bg-dark">
        <img src="assets/images/thumbs/karen.png" alt="" class="updown-animation position-absolute bottom-0 tw-end-0">

        <div class="sgsdgsdg">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="py-120">
                        <div class="">
                            <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Safe Transportation & Logistics</span>
                            <h2 class="splitTextStyleOne cursor-big text-white tw-mb-8">Transport & Logistics Services We are the best</h2>
                            <p class="cursor-small text-white">Transmds is the world's driving worldwide coordinations supplier — we uphold industry and exchange the</p>
                        </div>
                        <ul class="cursor-small d-flex flex-column tw-gap-3 tw-mt-14">
                            <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                <span class="text-neutral-400 tw-text-lg">Preaching Worship An Online Family</span>
                            </li>
                            <li class="d-flex align-items-center tw-gap-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <span class="text-main-600 d-flex"><i class="ph-bold ph-check"></i></span>
                                <span class="text-neutral-400 tw-text-lg">Preaching Worship An Online Family</span>
                            </li>
                        </ul>
                        <div class="tw-mt-15 d-flex align-items-center tw-gap-5">
                            <div class="tw-rounded-md overflow-hidden cursor-big" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <img src="assets/images/thumbs/quate-img.png" alt="" class="w-100 h-100 object-fit-cover">
                            </div>
                            <p class="tw-text-lg text-white fw-bold max-w-310-px cursor-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Leading global logistic and transport agency since <span class="text-main-600">1990</span> </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <div class="clip-path-short position-relative tw-translate-y-35-px bg-main-600 tw-py-15 px-lg-5 tw-px-56 tw-mt-16 max-w-468-px ms-auto">
                        <h4 class="text-white tw-mb-8 cursor-big">Request a quote form</h4>
                        <form id="bookingForm">
                            <div class="row gy-4" id="parcelSection">
                                <!-- Parcel Section -->
                                <div class="col-sm-12">
                                    <label for="personalInfo" class="cursor-small text-white tw-text-sm tw-mb-4">Parcel Description</label>
                                    <textarea type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="parcelDescription" placeholder="Parcel Description"></textarea>
                                </div>

                                <div class="col-sm-12">
                                    <label for="deliveryInfo" class="cursor-small text-white tw-text-sm tw-mb-4">Parcel Type</label>
                                    <select class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none form-select selectpicker" id="parcelType" data-live-search="true">
                                        <option value="none" selected disabled>Select Type</option>
                                        <option value="document">Document</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="clothing">Clothing</option>
                                        <option value="food">Food Items</option>
                                        <option value="fragile">Fragile Items</option>
                                        <option value="furniture">Furniture</option>
                                        <option value="medicine">Medicine</option>
                                        <option value="books">Books</option>
                                        <option value="toys">Toys</option>
                                        <option value="hardware">Hardware Tools</option>
                                        <option value="gifts">Gifts</option>
                                        <option value="other">Others</option>
                                    </select>
                                </div>

                                <script>
                                    $(document).ready(function() {
                                        $('.selectpicker').selectpicker();
                                    });
                                </script>

                                <div class="col-sm-12">
                                    <label for="personalInfo" class="cursor-small text-white tw-text-sm tw-mb-4">Weight</label>
                                    <input type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="weight" placeholder="Weight in KG">
                                </div>

                                <div class="col-sm-12">
                                    <button type="button" id="nextButton" class="cursor-small btn btn-main-two hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505 w-100 tw-h-15 tw-mt-6" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Next ></span>
                                    </button>
                                </div>
                            </div>

                            <div class="row gy-4" id="deliverySection" style="display: none;">
                                <!-- Delivery Section -->
                                <div class="col-sm-12">
                                    <label for="pickupaddress" class="cursor-small text-white tw-text-sm tw-mb-4">Pickup Address</label>
                                    <input type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="pickupaddress" placeholder="Pickup Address">
                                </div>

                                <div class="col-sm-12">
                                    <label for="rname" class="cursor-small text-white tw-text-sm tw-mb-4">Reciever Name</label>
                                    <input type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="recname" placeholder="Reciever Name">
                                </div>

                                <div class="col-sm-12">
                                    <label for="rnum" class="cursor-small text-white tw-text-sm tw-mb-4">Reciever Phone Number</label>
                                    <input type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="recnum" placeholder="Reciever Phone Number">
                                </div>

                                <div class="col-sm-12">
                                    <label for="deliveryaddress" class="cursor-small text-white tw-text-sm tw-mb-4">Delivery Address</label>
                                    <input type="text" class="cursor-big tw-px-5 tw-py-3 bg-white tw-placeholder-text-main-two-600 border-0 focus-outline-0 w-100 tw-placeholder-transition-2 focus-tw-placeholder-text-hidden rounded-0 shadow-none" id="deliveryaddress" placeholder="Delivery Address">
                                </div>

                                <input type="hidden" id="parcelId" name="parcelId">

                                <div class="col-sm-12">
                                    <div class="d-flex align-items-center tw-gap-6 flex-wrap tw-mt-4">
                                        <label class="cursor-small text-white tw-text-sm tw-mb-4">Payment Method</label>
                                        <div class="form-check common-check cursor-small d-flex tw-gap-205 mb-0">
                                            <input class="form-check-input border-white" type="radio" name="payment" value="pickup" id="onpickup">
                                            <label class="form-check-label text-white tw-text-sm fw-bold" for="onpickup">On Pickup</label>
                                        </div>
                                        <div class="form-check common-check cursor-small d-flex tw-gap-205 mb-0">
                                            <input class="form-check-input border-white" type="radio" name="payment" value="delivery" id="ondelivery">
                                            <label class="form-check-label text-white tw-text-sm fw-bold" for="ondelivery">On Delivery</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="button" id="bookButton" class="cursor-small btn btn-main-two hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0 tw-px-13 tw-py-505 w-100 tw-h-15 tw-mt-6" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Book</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    document.getElementById('nextButton').addEventListener('click', function() {
                        // Get Parcel Details
                        var parcelDescription = document.getElementById('parcelDescription').value;
                        var parcelType = document.getElementById('parcelType').value;
                        var weight = document.getElementById('weight').value;

                        // Validate Parcel Details
                        if (parcelDescription && parcelType && weight) {
                            // Send Parcel Details to Server
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'save_parcel.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    // Parse the response to get the parcelId
                                    var response = JSON.parse(xhr.responseText);
                                    var parcelId = response.parcelId;

                                    // Store the parcelId in a hidden input field or a JavaScript variable
                                    document.getElementById('parcelId').value = parcelId;

                                    // Hide Parcel Section and Show Delivery Section
                                    document.getElementById('parcelSection').style.display = 'none';
                                    document.getElementById('deliverySection').style.display = 'block';
                                    document.getElementById('nextButton').style.display = 'none';
                                    document.getElementById('bookButton').style.display = 'block';
                                }
                            };
                            xhr.send('description=' + encodeURIComponent(parcelDescription) + '&type=' + encodeURIComponent(parcelType) + '&weight=' + encodeURIComponent(weight));
                        } else {
                            alert('Please fill in all parcel details.');
                        }
                    });

                    document.getElementById('bookButton').addEventListener('click', function() {
                        // Get Delivery Details
                        var pickupAddress = document.getElementById('pickupaddress').value;
                        var recieverName = document.getElementById('recname').value;
                        var recieverPhone = document.getElementById('recnum').value;
                        var deliveryAddress = document.getElementById('deliveryaddress').value;
                        var paymentMethod = document.querySelector('input[name="payment"]:checked').value;
                        var parcelId = document.getElementById('parcelId').value;

                        // Validate Delivery Details
                        if (pickupAddress && recieverName && recieverPhone && deliveryAddress && paymentMethod) {
                            // Send Delivery Details to Server
                            var xhr = new XMLHttpRequest();
                            xhr.open('POST', 'save_delivery.php', true);
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    alert('Booking Successful!');
                                    // Optionally, redirect or reset the form
                                }
                            };
                            xhr.send('pickupAddress=' + encodeURIComponent(pickupAddress) + '&recieverName=' + encodeURIComponent(recieverName) + '&recieverPhone=' + encodeURIComponent(recieverPhone) + '&deliveryAddress=' + encodeURIComponent(deliveryAddress) + '&paymentMethod=' + encodeURIComponent(paymentMethod) + '&parcelId=' + encodeURIComponent(parcelId));
                        } else {
                            alert('Please fill in all delivery details.');
                        }
                    });

                    function initializeAutocomplete() {
                        var pickupInput = document.getElementById('pickupaddress');
                        var deliveryInput = document.getElementById('deliveryaddress');

                        // Attach Google Places Autocomplete to inputs
                        var pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
                        var deliveryAutocomplete = new google.maps.places.Autocomplete(deliveryInput);

                        // Restrict autocomplete to specific location types (optional)
                        pickupAutocomplete.setFields(['address_components', 'formatted_address', 'geometry', 'name']);
                        deliveryAutocomplete.setFields(['address_components', 'formatted_address', 'geometry', 'name']);

                        // Listen for place selection
                        pickupAutocomplete.addListener('place_changed', function() {
                            var place = pickupAutocomplete.getPlace();
                            if (place.formatted_address) {
                                // Save the formatted address instead of the Google Maps link
                                document.getElementById('pickupaddress').value = place.formatted_address;
                                console.log('Pickup Address Selected:', place.formatted_address);
                            }
                        });

                        deliveryAutocomplete.addListener('place_changed', function() {
                            var place = deliveryAutocomplete.getPlace();
                            if (place.formatted_address) {
                                // Save the formatted address instead of the Google Maps link
                                document.getElementById('deliveryaddress').value = place.formatted_address;
                                console.log('Delivery Address Selected:', place.formatted_address);
                            }
                        });
                    }

                    // Initialize when the page loads
                    google.maps.event.addDomListener(window, 'load', initializeAutocomplete);
                </script>
            </div>
        </div>
    </section>
    <!-- ================================ Quate Section End ========================== -->

    <!-- ==================== Footer Start Here ==================== -->
    <footer class="footer bg-main-two-600 position-relative z-1 mt-auto pt-140">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between tw-gap-10 border-bottom border-neutral-1100 tw-pb-13">
                <h3 class="text-white max-w-548-px cursor-big" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    We ensure safe <span class="text-main-600">transportation</span> & quality delivery
                </h3>
                <div class="d-flex align-items-center tw-gap-40-px tw-p-2 max-w-520-px bg-white-01 rounded-pill" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <span class="tw-w-85-px tw-h-85-px bg-white rounded-circle d-flex justify-content-center align-items-center cursor-big flex-shrink-0">
                        <img src="assets/images/icons/message-icon.svg" alt="">
                    </span>
                    <h6 class="text-white tw-pe-10 fw-medium cursor-small">Contact us at
                        <a href="javascript:void(0)" class="text-main-600 text-decoration-underline cursor-big">@WOWtheme.com</a>
                    </h6>
                </div>
            </div>

            <div class="tw-pt-84-px tw-pb-84-px">
                <div class="row gy-5">
                    <div class="col-xl-6 pe-xxl-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="bg-white-01 tw-rounded-xl p-lg-5 tw-p-6 position-relative z-1">
                            <img src="assets/images/shapes/contact-box-shape.png" alt="" class="position-absolute top-0 tw-end-0 h-100 z-n1">

                            <h4 class="tw-mb-7 text-white cursor-big splitTextStyleTwo">Subscribe Newsletter</h4>
                            <p class="text-neutral-50 fw-semibold cursor-small">We understand that every challenge is an opportunity </p>

                            <div class="tw-mt-15">
                                <form action="#" class="d-flex flex-sm-row flex-column tw-gap-5">
                                    <div class="position-relative flex-grow-1">
                                        <input type="text" class="tw-h-14 tw-rounded-lg bg-white-01 tw-ps-12 border border-neutral-1100 focus-border-main-600 text-white focus-outline-0 w-100 cursor-big tw-pe-6" placeholder="Email Address">
                                        <span class="text-white tw-text-lg position-absolute top-50 tw-start-0 tw--translate-y-50 tw-ms-5 d-flex">
                                            <i class="ph ph-envelope-simple"></i>
                                        </span>
                                    </div>
                                    <button type="submit" class="cursor-small btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-2 group active--translate-y-2 fw-semibold flex-grow-1 flex-shrink-0" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">Sign Up</span>
                                        <span class="text-white tw-text-sm tw-rounded d-flex justify-content-center align-items-center position-relative group-hover-text-main-600 tw-duration-500">
                                            <i class="ph-bold ph-caret-right"></i>
                                        </span>
                                    </button>
                                </form>
                            </div>

                            <div class="d-flex align-items-center tw-gap-4 tw-mt-7">
                                <span class="tw-w-6 tw-h-6 rounded-circle border border-neutral-1100 d-flex justify-content-center align-items-center text-main-600">
                                    <i class="ph-bold ph-check"></i>
                                </span>
                                <p class="text-neutral-500 fw-bold cursor-small">By subscribing, you're accept
                                    <a href="javascript:void(0)" class="text-white text-decoration-underline hover-text-main-600 hover--translate-y-1">Privacy Policy</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 ps-xxl-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h5 class="text-white tw-mb-6 cursor-big splitTextStyleTwo">Services</h5>
                        <ul class="d-flex flex-column tw-gap-6">
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">Request A Freight</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">Our Services</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">What We Do</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">Abandonment Cart</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">Shipments</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-arrow cursor-small position-relative text-neutral-500 hover-text-main-600 fw-semibold">Pricing Flexibility</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 ps-xxl-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="d-flex flex-column flex-wrap tw-gap-10">
                            <div class="">
                                <h5 class="text-white tw-mb-6 cursor-big splitTextStyleTwo">Services</h5>
                                <p class="position-relative text-neutral-500 fw-semibold cursor-small">55 Main Street, 2nd block Malborne, Australia</p>
                            </div>
                            <div class="">
                                <h5 class="text-white tw-mb-6 cursor-big">Contact</h5>
                                <a href="mailto:support@gmail.com" class="cursor-small hover--translate-x-2 position-relative text-neutral-500 hover-text-main-600 fw-semibold">support@gmail.com</a>
                                <a href="tel:+880(123)45688" class="cursor-big hover--translate-x-2 tw-mt-2 fw-bold position-relative text-main-600 tw-text-2xl hover-text-main-700 fw-semibold">+880 (123) 456 88</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <!-- bottom Footer -->
            <div class="border-top border-dashed border-neutral-1100 border-0 tw-py-8">
                <div class="container container-two">
                    <div class="d-flex align-items-center justify-content-between tw-gap-6 flex-wrap">
                        <div class="mb-0">
                            <a href="index.html" class="cursor-big"> <img src="assets/images/logo/logo3.png" alt=""></a>
                        </div>
                        <p class="text--white text-line-1 fw-normal cursor-small"> &copy; 2024
                            <a href="https://themeforest.net/user/wowtheme7/portfolio" class="text-main-600 hover--translate-y-1 fw-bold hover-underline hover-text-main-600 cursor-big">wowtheme7</a> - Logistic Service. All rights reserved.
                        </p>
                        <div class="d-flex align-items-center tw-gap-6">
                            <a href="javascript:void(0)" class="fw-semibold text-neutral-500 hover-text-white hover-underline cursor-small hover--translate-y-1">Company</a>
                            <a href="javascript:void(0)" class="fw-semibold text-neutral-500 hover-text-white hover-underline cursor-small hover--translate-y-1">Support</a>
                            <a href="javascript:void(0)" class="fw-semibold text-neutral-500 hover-text-white hover-underline cursor-small hover--translate-y-1">Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== Footer End Here ==================== -->


    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

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



</body>

</html>