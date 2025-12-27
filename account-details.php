<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<head>
    <?php include 'headerlink.php'; ?>
</head>

<body>

    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-btn"><span>RTL</span></a>
    <!-- /RTL  -->

    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-arrow-right"></span>
    </button>
    <!-- /Scroll Top -->


    <div id="wrapper">

        <!-- Top Bar-->
        <?php include 'topbar.php'; ?>
        <!-- /Top Bar -->

        <!-- Header -->
        <?php include 'header.php'; ?>
        <!-- /Header -->


        <!-- Title Page -->
        <section class="tf-page-title">
            <div class="container">
                <div class="box-title text-center">
                    <h4 class="title">My Account</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.php">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Account</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Main Content -->
        <div class="flat-spacing-13">
            <div class="container-7">
                <!-- sidebar-account -->
                <div class="btn-sidebar-mb d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount">
                        <i class="icon icon-sidebar"></i>
                    </button>
                </div>
                <!-- /sidebar-account -->

                <!-- Section-acount -->
                <div class="main-content-account">
                    <div class="sidebar-account-wrap sidebar-content-wrap sticky-top d-lg-block d-none">
                        <ul class="my-account-nav">
                            <li>
                                <a href="account-page.php"
                                    class="text-sm link fw-medium my-account-nav-item">Dashboard</a>
                            </li>
                            <li>
                                <a href="account-orders.php" class="text-sm link fw-medium my-account-nav-item">My
                                    Orders</a>
                            </li>
                            <li>
                                <a href="wish-list.php" class="text-sm link fw-medium my-account-nav-item">My
                                    Wishlist</a>
                            </li>
                            <li>
                                <a href="account-addresses.php"
                                    class="text-sm link fw-medium my-account-nav-item">Addresses</a>
                            </li>
                            <li>
                                <a href="account-detail.php"
                                    class="text-sm link fw-medium my-account-nav-item active">Account Details</a>
                            </li>
                            <li>
                                <a href="index.php" class="text-sm link fw-medium my-account-nav-item">Log
                                    Out</a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-acount-content account-dashboard">
                        <form action="#" class="form-edit-account">
                            <h6 class="display-xs title-form">Account Details</h6>
                            <div class="form-name">
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="firstname" placeholder=" " type="text"
                                        name="firstname">
                                    <label class="tf-field-label" for="firstname">First name</label>
                                </div>
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="lastname" placeholder=" " type="text"
                                        name="lastname">
                                    <label class="tf-field-label" for="lastname">Last name</label>
                                </div>
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="email" placeholder=" " type="email"
                                        name="email">
                                    <label class="tf-field-label" for="email">Email</label>
                                </div>
                            </div>
                            <div class="form-pass">
                                <div class="text-lg title-pass">Password Change</div>
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="pass" placeholder=" " type="text"
                                        name="pass">
                                    <label class="tf-field-label" for="pass">Current password</label>
                                </div>
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="newpass" placeholder=" " type="password"
                                        name="newpass">
                                    <label class="tf-field-label" for="newpass">New password</label>
                                </div>
                                <div class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="confirm-password" placeholder=" "
                                        type="password" name="confirm-password">
                                    <label class="tf-field-label" for="confirm-password">Confirm password</label>
                                </div>
                            </div>
                            <button type="submit" class="tf-btn animate-btn">Save Changes</button>
                        </form>
                    </div>
                </div>
                <!-- /Account -->
            </div>
        </div>
        <!-- /Main Content -->

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- /Footer -->

        <!-- sidebar account-->
        <div class="offcanvas offcanvas-start canvas-sidebar" id="mbAccount">
            <div class="canvas-wrapper">
                <div class="canvas-header">
                    <span class="title">SIDEBAR ACCOUNT</span>
                    <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="canvas-body">
                    <div class="sidebar-account-wrap sidebar-mobile-append"></div>
                </div>
            </div>
        </div>
        <!-- End sidebar account -->

    </div>

    <!-- mobile menu -->
    <?php include 'mobilemenu.php'; ?>
    <!-- /mobile menu -->

    <!-- toolbar -->
    <?php include 'toolbar.php'; ?>
    <!-- /toolbar  -->


    <!-- login -->
    <?php include 'login.php'; ?>
    <!-- /login -->

    <!-- register -->
    <?php include 'register.php'; ?>
    <!-- /register -->

    <!-- Reset pass -->
    <div class="offcanvas offcanvas-end popup-style-1 popup-reset-pass" id="resetPass">
        <div class="canvas-wrapper">
            <div class="canvas-header popup-header">
                <span class="title">Reset Your Password</span>
                <button class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="canvas-body popup-inner">
                <form action="#" class="form-login">
                    <div class="">
                        <p class="text text-sm text-main-2">Forgot your password? No worries! Enter your registered
                            email to receive a link and securely reset it in just a few steps.</p>
                        <fieldset class="email mb_12">
                            <input type="email" placeholder="Enter Your Email*" required>
                        </fieldset>
                    </div>
                    <div class="bot">
                        <div class="button-wrap">
                            <button class="subscribe-button tf-btn animate-btn bg-dark-2 w-100" type="submit">Reset
                                Password</button>
                            <button type="button" data-bs-dismiss="offcanvas"
                                class="tf-btn btn-out-line-dark2 w-100">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Reset pass -->

    <!-- search -->
    <?php include 'searchmodal.php'; ?>
    <!-- /search -->

    <!-- shoppingcart -->
    <?php include 'shoppingcart.php'; ?>
    <!-- /shoppingcart -->

    <!-- modal quickView -->
    <?php include 'modalquickview.php'; ?>
    <!-- /modal quickView -->

    <!-- compare  -->
    <?php include 'compare.php'; ?>
    <!-- /compare  -->

    <!-- Javascript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/lazysize.min.js"></script>
    <script src="js/count-down.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/multiple-modal.js"></script>


    <script src="js/main.js"></script>
    <script src="js/sibforms.js" defer></script>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE = "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
</body>

</html>