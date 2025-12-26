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

    <!-- preload -->
    <?php include 'preload.php'; ?>
    <!-- /preload -->

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
                    <h4 class="title">Checkout</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.php">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Checkout</div>
                    </div>
                </div>
            </div>
        </section>


        <!-- /Title Page -->
        <!-- Cart Section -->
        <div class="flat-spacing-13">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <form class="tf-checkout-cart-main">
                            <div class="box-ip-checkout">
                                <div class="title text-lg fw-medium">Checkout</div>
                                <div class="grid-2 mb_16">
                                    <div class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="firstname" placeholder=" "
                                            type="text" name="firstname">
                                        <label class="tf-field-label" for="firstname">First name</label>
                                    </div>
                                    <div class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="lastname" placeholder=" " type="text"
                                            name="lastname">
                                        <label class="tf-field-label" for="lastname">Last name</label>
                                    </div>
                                </div>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="country" type="text" name="country"
                                        placeholder=" ">
                                    <label class="tf-field-label" for="country">Country</label>
                                </fieldset>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="address" type="text" name="address"
                                        placeholder="">
                                    <label class="tf-field-label" for="address">Address</label>
                                </fieldset>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input type="text" class="tf-field-input tf-input" name="apartment" placeholder="">
                                    <label class="tf-field-label" for="apartment">Apartment, suite, etc
                                        (optional)</label>
                                </fieldset>
                                <div class="grid-3 mb_16">
                                    <fieldset class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="city" type="text" name="city"
                                            placeholder="">
                                        <label class="tf-field-label" for="city">City</label>
                                    </fieldset>
                                    <div class="tf-select select-square">
                                        <select name="State" id="state">
                                            <option value="">State</option>
                                            <option value="alabama">Alabama</option>
                                            <option value="alaska">Alaska</option>
                                            <option value="california">California</option>
                                            <option value="hawaii">Hawaii</option>
                                            <option value="texas">Texas</option>
                                            <option value="georgia">Georgia</option>
                                        </select>
                                    </div>
                                    <fieldset class="tf-field style-2 style-3">
                                        <input class="tf-field-input tf-input" id="code" type="text" name="zipcode"
                                            placeholder="">
                                        <label class="tf-field-label" for="code">Zipcode/Postal</label>
                                    </fieldset>
                                </div>
                                <fieldset class="tf-field style-2 style-3 mb_16">
                                    <input class="tf-field-input tf-input" id="phone" type="text" name="phone"
                                        placeholder="">
                                    <label class="tf-field-label" for="phone">Phone</label>
                                </fieldset>
                            </div>
                            <div class="box-ip-contact">
                                <div class="title">
                                    <div class="text-lg fw-medium">Contact Information</div>
                                    <a href="#login" data-bs-toggle="offcanvas" class="text-sm link">Log in</a>
                                </div>
                                <fieldset class="tf-field style-2 style-3">
                                    <input class="tf-field-input tf-input" id="email/phone" placeholder=" " type="text"
                                        name="email/phone">
                                    <label class="tf-field-label" for="email/phone">Email or phone number</label>
                                </fieldset>

                            </div>
                            <div class="box-ip-shipping">
                                <div class="title text-lg fw-medium">Shipping Method</div>
                                <fieldset class="mb_16">
                                    <label for="freeship" class="check-ship">
                                        <input type="radio" id="freeship" class="tf-check-rounded" name="checkshipping">
                                        <span class="text text-sm">
                                            <span>Free Shipping (Estimate in 7/10 - 10/10/2025)</span>
                                            <span class="price">$00.00</span>
                                        </span>
                                    </label>
                                </fieldset>
                                <fieldset>
                                    <label for="expship" class="check-ship">
                                        <input type="radio" id="expship" class="tf-check-rounded" name="checkshipping"
                                            checked>
                                        <span class="text text-sm">
                                            <span>Express Shipping (Estimate in 4/10 - 5/10/2025)</span>
                                            <span class="price">$10.00</span>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="box-ip-payment">
                                <div class="title">
                                    <div class="text-lg fw-medium mb_4">Payment</div>
                                    <p class="text-sm text-main">All transactions are secure and encrypted.</p>
                                </div>
                                <fieldset class="mb_12">
                                    <label for="bank-transfer" class="check-payment">
                                        <input type="checkbox" id="bank-transfer" class="tf-check-rounded"
                                            name="bank-transfer">
                                        <span class="text-payment text-sm">Direct bank transfer</span>
                                    </label>
                                </fieldset>
                                <p class="mb_16 text-main">Make your payment directly into our bank account. Please use
                                    your Order ID as the payment reference.Your order will not be shipped until the
                                    funds have cleared in our account.</p>
                                <div class="payment-method-box" id="payment-method-box">
                                    <div class="payment-item mb_16">
                                        <label for="delivery" class="payment-header collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#delivery-payment" aria-controls="delivery-payment">
                                            <input type="radio" name="payment-method" class="tf-check-rounded"
                                                id="delivery">
                                            <span class="pay-title text-sm">Cash on delivery</span>
                                        </label>
                                        <div id="delivery-payment" class="collapse"
                                            data-bs-parent="#payment-method-box"></div>
                                    </div>
                                    <div class="payment-item mb_16">
                                        <label for="credit-card" class="payment-header" data-bs-toggle="collapse"
                                            data-bs-target="#credit-card-payment" aria-controls="credit-card-payment">
                                            <input type="radio" name="payment-method" class="tf-check-rounded"
                                                id="credit-card" checked>
                                            <span class="pay-title text-sm">Credit Card</span>
                                        </label>
                                        <div id="credit-card-payment" class="collapse show"
                                            data-bs-parent="#payment-method-box">
                                            <div class="payment-body">
                                                <fieldset class="ip-card mb_16">
                                                    <input type="text" class="style-2" placeholder="Card number">
                                                    <img class="card-logo" width="41" height="12"
                                                        src="images/payment/visa-2.png" alt="card">
                                                </fieldset>
                                                <div class="grid-2 mb_16">
                                                    <input type="text" class="style-2"
                                                        placeholder="Expiration date (MM/YY)">
                                                    <input type="text" class="style-2" placeholder="Sercurity code">
                                                </div>
                                                <fieldset class="mb_16">
                                                    <input type="text" class="style-2" placeholder="Name on card">
                                                </fieldset>
                                                <div class="cb-ship">
                                                    <input type="checkbox" checked class="tf-check" id="checkShip">
                                                    <label for="checkShip" class="text-sm text-main">Use shipping
                                                        address as billing address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-item paypal-payment mb_16">
                                        <label for="paypal" class="payment-header collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#paypal-payment" aria-controls="paypal-payment">
                                            <input type="radio" name="payment-method" class="tf-check-rounded"
                                                id="paypal">
                                            <span class="pay-title text-sm">PayPal<img class="card-logo" width="78"
                                                    height="20" src="images/payment/paypal-2.png" alt="apple"></span>
                                        </label>
                                        <div id="paypal-payment" class="collapse" data-bs-parent="#payment-method-box">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-dark-6 text-sm">Your personal data will be used to process your order,
                                    support your experience throughout this website, and for other purposes described in
                                    our <a href="privacy-policy.php"
                                        class="fw-medium text-decoration-underline link text-sm">privacy policy.</a></p>

                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4">
                        <div class="tf-page-cart-sidebar">
                            <form action="https://themesflat.co/html/vineta/thank-you.html" class="cart-box order-box">
                                <div class="title text-lg fw-medium">In your cart</div>
                                <ul class="list-order-product">
                                    <li class="order-item">
                                        <figure class="img-product">
                                            <img src="images/products/bags/product1.jpg" alt="product">
                                            <span class="quantity">1</span>
                                        </figure>
                                        <div class="content">
                                            <div class="info">
                                                <p class="name text-sm fw-medium">Loose Fit Tee</p>
                                                <span class="variant">White / L</span>
                                            </div>
                                            <span class="price text-sm fw-medium">$120.00</span>
                                        </div>
                                    </li>
                                    <li class="order-item">
                                        <figure class="img-product">
                                            <img src="images/products/bags/product2.jpg" alt="product">
                                            <span class="quantity">1</span>
                                        </figure>
                                        <div class="content">
                                            <div class="info">
                                                <p class="name text-sm fw-medium">Bow-Tie T-Shirt</p>
                                                <span class="variant">Black / L</span>
                                            </div>
                                            <span class="price text-sm fw-medium">$120.00</span>
                                        </div>
                                    </li>
                                    <li class="order-item">
                                        <figure class="img-product">
                                            <img src="images/products/bags/product3.jpg" alt="product">
                                            <span class="quantity">1</span>
                                        </figure>
                                        <div class="content">
                                            <div class="info">
                                                <p class="name text-sm fw-medium">Loose Fit Tee</p>
                                                <span class="variant">White / L</span>
                                            </div>
                                            <span class="price text-sm fw-medium">$130.00</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-total">
                                    <li class="total-item text-sm d-flex justify-content-between">
                                        <span>Subtotal:</span>
                                        <span class="price-sub fw-medium">$370.00 USD</span>
                                    </li>
                                    <li class="total-item text-sm d-flex justify-content-between">
                                        <span>Discount:</span>
                                        <span class="price-discount fw-medium">-$48.00 USD</span>
                                    </li>
                                    <li class="total-item text-sm d-flex justify-content-between">
                                        <span>Shipping:</span>
                                        <span class="price-ship fw-medium">$10.00 USD</span>
                                    </li>
                                    <li class="total-item text-sm d-flex justify-content-between">
                                        <span>Tax:</span>
                                        <span class="price-tax fw-medium">$48.00 USD</span>
                                    </li>
                                </ul>
                                <div class="subtotal text-lg fw-medium d-flex justify-content-between">
                                    <span>Subtotal:</span>
                                    <span class="total-price-order">$380.00 USD</span>
                                </div>
                                <div class="btn-order">
                                    <button type="submit"
                                        class="tf-btn btn-dark2 animate-btn w-100 text-transform-none">Place
                                        order</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cart Section -->


        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- /Footer -->

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


<!-- Mirrored from themesflat.co/html/vineta/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Dec 2025 07:28:31 GMT -->

</html>