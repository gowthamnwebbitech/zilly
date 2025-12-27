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
                    <h4 class="title">My Orders</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.php">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Orders</div>
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
                                <a href="account-orders.php"
                                    class="text-sm link fw-medium my-account-nav-item active">My Orders</a>
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
                                <a href="account-details.php"
                                    class="text-sm link fw-medium my-account-nav-item">Account Details</a>
                            </li>
                            <li>
                                <a href="index.php" class="text-sm link fw-medium my-account-nav-item">Log
                                    Out</a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-acount-content account-orders">
                        <div class="account-no-orders-wrap">
                            <img class="lazyload" data-src="images/section/account-no-order.png"
                                src="images/section/account-no-order.png" alt="">
                            <div class="display-sm fw-medium title">You haven’t placed any order yet</div>
                            <div class="text text-sm">It’s time to make your first order</div>
                            <a href="shop-fullwidth.php"
                                class="tf-btn animate-btn d-inline-flex bg-dark-2 justify-content-center">Shop
                                Now</a>
                        </div>
                        <div class="account-orders-wrap">
                            <h5 class="title">
                                Order History
                            </h5>
                            <div class="wrap-account-order">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="text-md fw-medium">Order ID</th>
                                            <th class="text-md fw-medium">Date</th>
                                            <th class="text-md fw-medium">Status</th>
                                            <th class="text-md fw-medium">Total</th>
                                            <th class="text-md fw-medium">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tf-order-item">
                                            <td class="text-md">
                                                #12345
                                            </td>
                                            <td class="text-md">
                                                15 May 2025
                                            </td>
                                            <td class="text-md text-delivered">
                                                Delivered
                                            </td>
                                            <td class="text-md">
                                                $690 / 3 items
                                            </td>
                                            <td>
                                                <a href="#order_detail" data-bs-toggle="modal"
                                                    class="view-detail">Detail</a>
                                            </td>
                                        </tr>
                                        <tr class="tf-order-item">
                                            <td class="text-md">
                                                #23154
                                            </td>
                                            <td class="text-md">
                                                16 May 2025
                                            </td>
                                            <td class="text-md text-delivered">
                                                Delivered
                                            </td>
                                            <td class="text-md">
                                                $460 / 2 items
                                            </td>
                                            <td>
                                                <a href="#order_detail" data-bs-toggle="modal"
                                                    class="view-detail">Detail</a>
                                            </td>
                                        </tr>
                                        <tr class="tf-order-item">
                                            <td class="text-md">
                                                #12467
                                            </td>
                                            <td class="text-md">
                                                17 May 2025
                                            </td>
                                            <td class="text-md text-on-the-way">
                                                On the way
                                            </td>
                                            <td class="text-md">
                                                $920 / 4 items
                                            </td>
                                            <td>
                                                <a href="#order_detail" data-bs-toggle="modal"
                                                    class="view-detail">Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
        <div class="offcanvas offcanvas-start canvas-filter canvas-sidebar canvas-sidebar-account" id="mbAccount">
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

        <!-- order-detail -->
        <div class="modal fade modalCentered modal-order-detail" id="order_detail">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="header">
                        <div class="heading">Order Detail</div>
                        <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                    </div>
                    <ul class="list-infor">
                        <li>#12345</li>
                        <li>15 May 2025</li>
                        <li>6 items</li>
                        <li class="text-delivered">Delivered</li>
                    </ul>
                    <div class="tb-order-detail">
                        <div class="top">
                            <div class="title item">Product</div>
                            <div class="title item d-md-block d-none">Quantity</div>
                            <div class="title item d-md-block d-none">Price</div>
                            <div class="title item d-md-block d-none">Total</div>
                        </div>
                        <div class="tb-content">
                            <div class="order-detail-item">
                                <div class="item">
                                    <div class="infor-content">
                                        <div class="image">
                                            <a href="product-detail.php">
                                                <img class="lazyload" data-src="images/products/fashion/product-1.jpg"
                                                    src="images/products/fashion/product-1.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <div>
                                            <a class="link" href="product-detail.php">Loose Fit Tee</a>
                                            <div class="size">White / L</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-title="Quantity">
                                    2
                                </div>
                                <div class="item" data-title="Price">
                                    $130.00
                                </div>
                                <div class="item" data-title="Total">
                                    $260.00
                                </div>
                            </div>
                            <div class="order-detail-item">
                                <div class="item">
                                    <div class="infor-content">
                                        <div class="image">
                                            <a href="product-detail.php">
                                                <img class="lazyload" data-src="images/products/fashion/product-2.jpg"
                                                    src="images/products/fashion/product-2.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <div>
                                            <a class="link" href="product-detail.php">Loose Fit Tee</a>
                                            <div class="size">White / L</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-title="Quantity">
                                    2
                                </div>
                                <div class="item" data-title="Price">
                                    $130.00
                                </div>
                                <div class="item" data-title="Total">
                                    $260.00
                                </div>
                            </div>
                            <div class="order-detail-item">
                                <div class="item">
                                    <div class="infor-content">
                                        <div class="image">
                                            <a href="product-detail.php">
                                                <img class="lazyload" data-src="images/products/fashion/product-3.jpg"
                                                    src="images/products/fashion/product-3.jpg" alt="img-product">
                                            </a>
                                        </div>
                                        <div>
                                            <a class="link" href="product-detail.php">Loose Fit Tee</a>
                                            <div class="size">White / L</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item" data-title="Quantity">
                                    2
                                </div>
                                <div class="item" data-title="Price">
                                    $130.00
                                </div>
                                <div class="item" data-title="Total">
                                    $260.00
                                </div>
                            </div>
                            <div class="order-detail-item subtotal">
                                <div class="item d-md-block d-none"></div>
                                <div class="item d-md-block d-none"></div>
                                <div class="item subtotal-text">
                                    Subtotal:
                                </div>
                                <div class="item subtotal-price">
                                    $720.00 USD
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom text-center">
                        Not happy with the order? You can <a href="return-and-refund.php"
                            class="fw-medium btn-underline">Request a free return</a> in <span class="fw-medium">14
                            days</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /order-detail -->

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