<!--==================== Preloader Start ====================-->
<div class="preloader bg-white tw-h-screen justify-content-center align-items-center tw-z-999 position-fixed top-0 tw-start-0 w-100 h-100">
    <div class="car-road">
        <div class="car">
            <div class="car-top">
                <div class="window">
                </div>
            </div>
            <div class="car-base">
            </div>
            <div class="wheel-left wheel">
                <div class="wheel-spike">
                </div>
                <div class="wheel-center">
                </div>
            </div>
            <div class="wheel-right wheel">
                <div class="wheel-spike">
                </div>
                <div class="wheel-center">
                </div>
            </div>
            <div class="head-light"></div>
        </div>
        <div class="road">
        </div>
    </div>
</div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<div class="progress-wrap cursor-big">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- Custom Cursor Start -->
<div class="cursor"></div>
<span class="dot"></span>
<!-- Custom Cursor End -->

<!-- ======================= Offcanvas sidebar popup start ================================= -->
<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $name  = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest';
$phone = isset($_SESSION['user_phone']) ? $_SESSION['user_phone'] : 'Guest Phone number';
$email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'guest@email.com';
?>

<div class="offcanvas-sidebar tw-p-8 bg-white position-fixed top-0 end-0 tw-max-h-screen tw-z-999 max-w-400-px w-100 tw-translate-x-full overflow-y-auto">
    <button type="button" class="cursor-small offcanvas-sidebar__close border border-main-600 tw-w-10 tw-h-10 text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-text-xl hover-bg-main-600 hover-text-white position-absolute tw-mt-8 top-0 tw-end-0 tw-me-8 z-1">
        <i class="ph-bold ph-x"></i>
    </button>

    <div class="d-flex flex-column tw-gap-8 overflow-hidden">
        <div class="animate-item">
            <a href="index.php" class="cursor-big">
                <img src="assets/images/logo/logo2.png" alt="Logo" class="max-w-200-px">
            </a>
        </div>
        <div>
            <h4 class="cursor-big tw-mb-5 animate-item"><?php echo htmlspecialchars($name); ?></h4>
        </div>
        <div>
            <h4 class="cursor-big tw-mb-5 animate-item">Profile</h4>
            <div class="d-flex flex-column tw-gap-6">
                <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                    <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                        <i class="ph ph-phone"></i>
                    </span>
                    <a href="tel:<?php echo htmlspecialchars($phone); ?>" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                        <?php echo htmlspecialchars($phone); ?>
                    </a>
                </div>
                <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                    <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                        <i class="ph ph-map-pin"></i>
                    </span>
                    <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                        <?php echo htmlspecialchars($email); ?>
                    </a>
                </div>
                <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                    <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                        <i class="ph ph-door"></i>
                    </span>
                    <a href="logout.php" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                        Logout
                    </a>
                </div>
                <script>
                    $(document).ready(function() {
                        // Attach a click event handler for any logout link
                        $('a[href="logout.php"]').on('click', function(e) {
                            e.preventDefault(); // Prevent the default link behavior

                            // Show the Toastify message
                            Toastify({
                                text: "Logout Successfull. Redirecting...",
                                duration: 3000,
                                backgroundColor: "green",
                                close: true,
                            }).showToast();

                            // After 3 seconds, redirect to logout.php
                            setTimeout(function() {
                                window.location.href = "logout.php";
                            }, 3000);
                        });
                    });
                </script>

            </div>
        </div>
        <div class="">
            <h4 class="cursor-big tw-mb-5 animate-item">Contact Us</h4>
            <ul class="cursor-small d-flex align-items-center tw-gap-3 animate-item">
                <li>
                    <a href="https://www.facebook.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-facebook-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-x-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-instagram-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-youtube-logo"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php
}else{
?>

<div class="offcanvas-sidebar tw-p-8 bg-white position-fixed top-0 end-0 tw-max-h-screen tw-z-999 max-w-400-px w-100 tw-translate-x-full overflow-y-auto">
    <button type="button" class="cursor-small offcanvas-sidebar__close border border-main-600 tw-w-10 tw-h-10 text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-text-xl hover-bg-main-600 hover-text-white position-absolute tw-mt-8 top-0 tw-end-0 tw-me-8 z-1">
        <i class="ph-bold ph-x"></i>
    </button>

    <div class="d-flex flex-column tw-gap-8 overflow-hidden">
        <div class="animate-item">
            <a href="index.php" class="cursor-big">
                <img src="assets/images/logo/logo2.png" alt="Logo" class="max-w-200-px">
            </a>
        </div>
        <div>
            <h4 class="cursor-big tw-mb-5 animate-item">Account</h4>
            <div class="d-flex flex-column tw-gap-6">
                <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                    <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                        <i class="ph ph-user"></i>
                    </span>
                    <a href="register.php" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                        Register
                    </a>
                </div>
                <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                    <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                        <i class="ph ph-door-open"></i>
                    </span>
                    <a href="login.php" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg">
                        Login
                    </a>
                </div>
            </div>
        </div>
        <div class="">
            <h4 class="cursor-big tw-mb-5 animate-item">Contact Us</h4>
            <ul class="cursor-small d-flex align-items-center tw-gap-3 animate-item">
                <li>
                    <a href="https://www.facebook.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-facebook-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-x-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-instagram-logo"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                        <i class="ph ph-youtube-logo"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php } ?>


<!-- ======================= Offcanvas sidebar popup End ================================= -->

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

    <button type="button" class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-main-two-600 bg-neutral-200 hover-bg-main-two-600 hover-text-white">
        <i class="ph ph-x"></i>
    </button>

    <div class="mobile-menu__inner">
        <a href="index.php" class="mobile-menu__logo">
            <img src="assets/images/logo/logo2.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav menu Start -->
            <ul class="nav-menu cursor-small d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                <li class="nav-menu__item has-submenu position-relative activePage">
                    <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Home</a>
                    <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-menu__item activePage">
                            <a href="index.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home One</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="index-2.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home Two</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="index-3.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home Three</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Pages</a>
                    <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="project.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Project</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="project-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Project Details</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="team.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Team</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="team-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Team Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Services</a>
                    <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="service.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Service </a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="service-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Service Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="about.php" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">About</a>
                </li>
                <li class="nav-menu__item has-submenu position-relative">
                    <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">News</a>
                    <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="blog.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> News</a>
                        </li>
                        <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                            <a href="blog-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> News Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="contact.php" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">Contact</a>
                </li>
            </ul>
            <!-- Nav menu End  -->

        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->


<main class="absolute-headers position-absolute top-0 tw-start-0 tw-end-0 w-100 tw-z-99 header">
    <!-- ============================= Top header Two start ================================= -->
    <div class="top-header-two">
        <div class="tw-container-1540-px mx-auto tw-px-4">
            <div class="d-flex justify-content-between tw-py-205 bg-main-600 tw-px-54-px">

                <div class="d-lg-flex align-items-center tw-gap-6 d-none">
                    <div class="cursor-small d-flex align-items-center tw-gap-2">
                        <span class="text-white d-flex"><i class="ph-bold ph-map-pin"></i></span>
                        <span class="text-white xl-tw-text-sm tw-text-xs fw-medium">55 Main Street, 2nd block, Malborne, Australia</span>
                    </div>
                    <div class="cursor-small d-flex align-items-center tw-gap-2">
                        <span class="text-white d-flex"><i class="ph-bold ph-phone"></i></span>
                        <a href="mailto:support@example.com" class="text-white xl-tw-text-sm tw-text-xs fw-medium hover--translate-x-05 tw-transition-all">support@example.com</a>
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-lg-end flex-wrap justify-content-between tw-gap-8 flex-grow-1">

                    <div class="d-flex align-items-center tw-gap-8">
                        <!-- Language Start -->
                        <div class="cursor-small position-relative group-item hover-mt-0">
                            <div class="d-flex align-items-center tw-gap-2">
                                <a href="javascript:void(0)" class="selected-text text-white d-flex align-items-center gap-2">
                                    <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle common-shadow d-flex justify-content-center align-items-center">
                                        <img src="assets/images/thumbs/flag1.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                    </span>
                                    English
                                </a>
                                <span class="text-white">
                                    <i class="ph-bold ph-caret-down"></i>
                                </span>
                            </div>
                            <ul class="lang-dropdown tw-max-h-300-px overflow-y-auto scroll-sm bg-white common-shadow tw-px-4 tw-py-3 position-absolute tw-end-0 top-100 min-w-max tw-rounded-lg d-flex flex-column tw-gap-3 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-duration-200 group-hover-item-mt-0 tw-mt-4 tw-z-99">
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag1.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag2.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        Japan
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag3.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        French
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag4.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        Germany
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag6.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        Bangladesh
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="assets/images/thumbs/flag5.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        Sought Kores
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Language End -->

                        <!-- Currency Start -->
                        <div class="cursor-small position-relative group-item hover-mt-0">
                            <div class="d-flex align-items-center tw-gap-2">
                                <a href="javascript:void(0)" class="selected-text text-white d-flex align-items-center gap-2">
                                    USD
                                </a>
                                <span class="text-white">
                                    <i class="ph-bold ph-caret-down"></i>
                                </span>
                            </div>
                            <ul class="lang-dropdown tw-max-h-300-px overflow-y-auto scroll-sm bg-white common-shadow tw-px-4 tw-py-3 position-absolute tw-end-0 top-100 min-w-max tw-rounded-lg d-flex flex-column tw-gap-3 tw-invisible opacity-0 group-hover-item-visible group-hover-item-opacity-1 tw-duration-200 group-hover-item-mt-0 tw-mt-4 tw-z-99">
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        USD
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        BDT
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        LUE
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        RWF
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="text-black d-flex align-items-center gap-2 hover-text-main-600 active--translate-y-1 tw-duration-150">
                                        XCD
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>

                    <div class="xs-d-block d-none">
                        <!-- Social Media Start -->
                        <ul class="d-flex align-items-center tw-gap-5">
                            <li>
                                <a href="https://wwww.twitter.com" class="tw-text-base text-neutral-100 hover-text-white hover-scale-20 cursor-small"><i class="ph-fill ph-twitter-logo"></i></a>
                            </li>
                            <li>
                                <a href="https://wwww.facebook.com" class="tw-text-base text-neutral-100 hover-text-white hover-scale-20 cursor-small"><i class="ph-fill ph-facebook-logo"></i></a>
                            </li>
                            <li>
                                <a href="https://wwww.instagram.com" class="tw-text-base text-neutral-100 hover-text-white hover-scale-20 cursor-small"><i class="ph-bold ph-instagram-logo"></i></a>
                            </li>
                            <li>
                                <a href="https://wwww.youtube.com" class="tw-text-base text-neutral-100 hover-text-white hover-scale-20 cursor-small"><i class="ph-fill ph-youtube-logo"></i></a>
                            </li>
                        </ul>
                        <!-- Social Media End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- ============================= Top header Two End ================================= -->

    <!-- =================================== Header Middle Start ======================== -->
    <div class="header-middle">
        <div class="tw-container-1540-px mx-auto tw-px-4">
            <div class="d-flex align-items-center justify-content-between bg-blur-three tw-px-54-px tw-py-505 overflow-hidden">

                <a href="index.php" class="cursor-big">
                    <img src="assets/images/logo/logo3.png" alt="">
                </a>

                <div class="d-xl-flex d-none align-items-center tw-gap-64-px">
                    <div class="d-flex align-items-center tw-gap-5 cursor-small">
                        <span class="">
                            <img src="assets/images/icons/watch.svg" alt="">
                        </span>
                        <div class="">
                            <span class="d-block fw-bold text-white">Opening Hours</span>
                            <span class="d-block fw-normal text-white">Mon _ Sat: 9.00 to 18.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center tw-gap-5 cursor-small">
                        <span class="">
                            <img src="assets/images/icons/envelop.svg" alt="">
                        </span>
                        <div class="">
                            <span class="d-block fw-bold text-white">Drop A Line</span>
                            <a href="tel:needhelp@company.com" class="d-block fw-normal text-white hover-text-main-600 hover--translate-x-1">needhelp@company.com</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center tw-gap-5 cursor-small">
                        <span class="">
                            <img src="assets/images/icons/phone.svg" alt="">
                        </span>
                        <div class="">
                            <span class="d-block fw-bold text-white">Phone Number</span>
                            <a href="mailto:(671)555-0110555-01" class="d-block fw-normal text-white hover-text-main-600 hover--translate-x-1">(671) 555-0110555-01</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center tw-gap-405 cursor-small tw-ps-8 line-two">
                    <span class="xs-d-block d-none">
                        <img src="assets/images/icons/papper.svg" alt="">
                    </span>
                    <a href="javascript:void(0)" class="tw-text-sm text-white fw-bold text-decoration-underline hover-text-main-600">Track your shipment</a>
                </div>

            </div>
        </div>
    </div>
    <!-- =================================== Header Middle End ======================== -->

    <!-- ============================= Header Two start ==================================== -->
    <header class="links-white">
        <div class="tw-container-1540-px mx-auto tw-px-4">
            <div class="header-two__nav d-flex justify-content-between tw-px-54-px bg-blur-four tw-rounded-bl-2xl tw-rounded-br-2xl py-lg-0 tw-py-2">

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav menu Start -->
                    <ul class="nav-menu cursor-small d-lg-flex align-items-center xl-tw-gap-12 tw-gap-8">
                        <li class="nav-menu__item has-submenu position-relative activePage">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Home</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-menu__item activePage">
                                    <a href="index.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home One</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="index-2.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home Two</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="index-3.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Home Three</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Pages</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="project.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Project</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="project-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Project Details</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="team.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Team</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="team-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Team Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">Services</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="service.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> Service </a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="service-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded">Service Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="about.php" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">About</a>
                        </li>
                        <li class="nav-menu__item has-submenu position-relative">
                            <a href="javascript:void(0)" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4">News</a>
                            <ul class="nav-submenu scroll-sm position-absolute start-0 top-100 tw-w-max bg-white tw-rounded-md overflow-hidden tw-p-2 tw-mt-4 tw-duration-200 tw-z-99">
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="blog.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> News</a>
                                </li>
                                <li class="nav-submenu__item d-block tw-rounded tw-duration-200 position-relative">
                                    <a href="blog-details.php" class="nav-submenu__link hover-bg-neutral-100 text-black fw-medium w-100 d-block tw-py-2 tw-px-305 tw-rounded"> News Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="contact.php" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100">Contact</a>
                        </li>
                    </ul>
                    <!-- Nav menu End  -->

                </div>
                <!-- Menu End  -->

                <div class="d-flex">

                    <div class="d-flex justify-content-center align-items-center">
                        <a href="javascript:void(0)" class="position-relative cursor-small">
                            <img src="assets/images/icons/cart-icon.svg" alt="">
                            <span class="min-w-max tw-h-405 tw-p-1 bg-main-600 text-white d-flex justify-content-center align-items-center rounded-pill position-absolute bottom-100 tw-start-50">0</span>
                        </a>
                    </div>

                    <!-- Bar icon -->
                    <button type="button" title="Account" class="offcanvas-bar-icon cursor-small hover--translate-y-1 active--translate-y-05 tw-duration-150  border-start border-neutral-1100 text-white tw-ps-8 tw-ms-8">
                    <i class="ph ph-user"></i>
                    </button>
                    <!-- Bar icon End -->
                </div>

                <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-white tw-text-9">
                    <i class="ph ph-list"></i>
                </button>

            </div>
        </div>
    </header>
    <!-- ============================= Header Two end ==================================== -->
</main>