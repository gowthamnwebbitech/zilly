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

        <section class="flat-spacing-3 pb-0">
            <div class="container">
                <div class="flat-title-2 d-xl-flex justify-content-xl-between">
                    <div class="box-title">
                        <p class="display-lg-2 fw-medium">
                            Welcome to Zilly
                        </p>
                        <p class="text-xl">
                            Where Style Meets Everyday Function
                        </p>
                    </div>
                    <div class="box-text">
                        <p class="text-md">
                            At <span class="fw-medium">Zilly</span>, we design and curate premium bags that combine modern style
                            with everyday practicality. <br class="d-none d-xl-block">
                            From chic handbags to versatile backpacks and travel essentials, every piece is crafted with <br
                                class="d-none d-xl-block">
                            attention to detail, quality materials, and timeless appeal—perfect for work, travel, and life on the go.
                        </p>
                    </div>
                </div>

                <div class="image radius-16 overflow-hidden banner-about">
                    <img src="images/section/aboutnew.jpg"
                        data-src="images/section/aboutnew.jpg"
                        alt="Zilly Premium Bags Collection"
                        class="w-100 h-100 object-fit-cover lazyload">
                </div>
            </div>
        </section>


        <!-- Why Choose -->
        <section class="flat-spacing-3">
            <div class="container">
                <div class="flat-title text-center">
                    <p class="display-md-2 fw-medium">
                        Why Choose Zilly
                    </p>
                    <p class="text-md text-main">
                        At Zilly, we create bags that blend modern design with everyday functionality. Every piece is thoughtfully
                        crafted to elevate your style while supporting your daily needs—at work, on the move, or while traveling.
                    </p>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <ul class="list-esd d-md-flex flex-md-column justify-content-md-center h-100">
                            <li class="item">
                                <h6>
                                    Premium Craftsmanship
                                </h6>
                                <p class="text-md text-main">
                                    Each Zilly bag is made using high-quality materials and precise craftsmanship, ensuring
                                    durability, refined finishes, and long-lasting performance you can rely on every day.
                                </p>
                            </li>

                            <li class="item">
                                <h6>
                                    Designed for Everyday Life
                                </h6>
                                <p class="text-md text-main">
                                    From spacious totes and elegant handbags to functional backpacks and travel bags, Zilly
                                    designs combine smart storage with effortless style.
                                </p>
                            </li>

                            <li class="item">
                                <h6>
                                    Style That Reflects You
                                </h6>
                                <p class="text-md text-main">
                                    Our collections are created for modern individuals who value versatility, confidence, and
                                    timeless fashion—bags that adapt seamlessly to your lifestyle.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-5 col-md-6">
                        <div class="image radius-16 overflow-hidden w-100 h-100">
                            <img src="images/section/aboutnew1.jpg"
                                data-src="images/section/aboutnew1.jpg"
                                alt="Zilly Premium Bags"
                                class="lazyload w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Why Choose -->

        <!-- ================= STYLE CURATED SECTION ================= -->
        <section class="flat-spacing-3 pt-0">
            <div class="container">
                <div class="flat-title-2 d-xl-flex justify-content-xl-between">
                    <div class="box-title">
                        <p class="display-md-2 fw-medium">
                            Bags Curated for Your Lifestyle
                        </p>
                        <p class="text-xl">
                            Designed to Match Your Everyday Journey
                        </p>
                    </div>
                    <div class="box-text">
                        <p class="text-md">
                            At <span class="fw-medium">Zilly</span>, we thoughtfully design bags that balance style and function. <br
                                class="d-none d-xl-block">
                            From workdays to weekends and travel moments, our collections are crafted to <br
                                class="d-none d-xl-block">
                            complement your lifestyle with confidence and ease.
                        </p>
                    </div>
                </div>

                <div dir="ltr" class="swiper tf-swiper" data-swiper='{
            "slidesPerView": 1,
            "spaceBetween": 12,
            "speed": 800,
            "preventInteractionOnTransition": false,
            "touchStartPreventDefault": false,
            "pagination": { "el": ".sw-pagination-iconbox", "clickable": true },
            "breakpoints": {
                "575": { "slidesPerView": 2, "spaceBetween": 12 },
                "992": { "slidesPerView": 3, "spaceBetween": 24 }
            }
        }'>
                    <div class="swiper-wrapper">

                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-precision"></i>
                                </div>
                                <div class="content">
                                    <h6>Crafted with Precision</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        Every Zilly bag is crafted using premium materials with careful attention to stitching,
                                        structure, and finish—ensuring durability and long-lasting quality.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-elegance"></i>
                                </div>
                                <div class="content">
                                    <h6>Effortless Style</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        Designed with a clean, modern aesthetic, Zilly bags elevate any outfit—whether you're
                                        heading to work, travel, or a casual day out.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="tf-icon-box style-border">
                                <div class="box-icon">
                                    <i class="icon icon-fashion-body"></i>
                                </div>
                                <div class="content">
                                    <h6>Made for Every Moment</h6>
                                    <p class="text-sm text-main text-line-clamp-4">
                                        From handbags and totes to backpacks and travel bags, our versatile designs adapt
                                        seamlessly to your everyday needs.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex d-xl-none sw-dot-default sw-pagination-iconbox justify-content-center"></div>
                </div>
            </div>
        </section>

        <!-- ================= TESTIMONIAL SECTION ================= -->
        <section class="flat-spacing-13 pt-0">
            <div class="container">
                <div class="box-testimonial-quote text-center">
                    <div class="list-star-default justify-content-center">
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                        <i class="icon-star text-green"></i>
                    </div>

                    <p class="text-xl lh-xl-32">
                        "Zilly bags exceeded my expectations. The quality, design, and fast delivery made the entire
                        shopping experience seamless. I’ve found my go-to brand for everyday bags!"
                    </p>

                    <div class="box-author">
                        <div class="avt">
                            <img src="images/testimonial/tes-about.jpg" alt="Zilly Customer Review">
                        </div>
                        <p class="text-md lh-xl-26 fw-medium">
                            Zilly Customer
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- /Footer -->
    </div>


    <!-- modal demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h5 class="demo-title">Ultimate HTML Theme</h5>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-1.jpg"
                                    src="images/demo/fashion-1.jpg" alt="home-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="index.html" class="demo-name link">Fashion Style 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-02.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/fashion-2.jpg"
                                    src="images/demo/fashion-2.jpg" alt="home-fashion">
                            </a>
                            <a href="home-fashion-02.html" class="demo-name link">Fashion Style
                                2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-florist.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/florist.jpg" src="images/demo/florist.jpg"
                                    alt="home-florist">
                            </a>
                            <a href="home-florist.html" class="demo-name link">Florist</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-ergonic-chair.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/ergonic-chair.jpg"
                                    src="images/demo/ergonic-chair.jpg" alt="home-chair">
                            </a>
                            <a href="home-ergonic-chair.html" class="demo-name link">Ergonic Chair</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-travel.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/travel.jpg" src="images/demo/travel.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-travel.html" class="demo-name link">Travel</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-book.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/books.jpg" src="images/demo/books.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-book.html" class="demo-name link">Books</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-watch.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/watch.jpg" src="images/demo/watch.jpg"
                                    alt="travel">
                            </a>
                            <a href="home-watch.html" class="demo-name link">Watch</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/electronic.jpg"
                                    src="images/demo/electronic.jpg" alt="home-electronic">
                            </a>
                            <a href="home-electronic.html" class="demo-name link">Electronic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/furniture.jpg"
                                    src="images/demo/furniture.jpg" alt="home-furniture">
                            </a>
                            <a href="home-furniture.html" class="demo-name link">Furniture</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-women.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/women-fashion.jpg"
                                    src="images/demo/women-fashion.jpg" alt="home-women-fashion">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-fashion-women.html" class="demo-name link">Women
                                Fashion</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/comestic.jpg" src="images/demo/comestic.jpg"
                                    alt="home-comestic">
                            </a>
                            <a href="home-skincare.html" class="demo-name link">Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-bicycle.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/bicycle.jpg" src="images/demo/bicycle.jpg"
                                    alt="home-bicycle">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-bicycle.html" class="demo-name link">Bicycle</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-phonecase.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/phonecase.jpg"
                                    src="images/demo/phonecase.jpg" alt="home-phonecase">
                            </a>
                            <a href="home-phonecase.html" class="demo-name link">Phone Case</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pet-accessories.jpg"
                                    src="images/demo/pet-accessories.jpg" alt="home-pet">
                            </a>
                            <a href="home-pet-accessories.html" class="demo-name link">Pet
                                Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sportwear.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/sportwear.jpg"
                                    src="images/demo/sportwear.jpg" alt="home-bicycle">
                            </a>
                            <a href="home-sportwear.html" class="demo-name link">Sportwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry.jpg" src="images/demo/jewelry.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry.html" class="demo-name link">Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electric-accessories.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/eletric-accessories.jpg"
                                    src="images/demo/eletric-accessories.jpg" alt="home-electric-accessories">
                                <div class="demo-label">
                                    <span>New</span>
                                    <span class="demo-hot">Hot</span>
                                </div>
                            </a>
                            <a href="home-electric-accessories.html" class="demo-name link">Electric Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-mega-electronic.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/mega-shop.jpg"
                                    src="images/demo/mega-shop.jpg" alt="home-mega-electronic">
                            </a>
                            <a href="home-mega-electronic.html" class="demo-name link">Mega Shop</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-vegetable.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supermarket.jpg"
                                    src="images/demo/supermarket.jpg" alt="home-supermarket">
                            </a>
                            <a href="home-vegetable.html" class="demo-name link">Supermarket</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pod.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pod.jpg" src="images/demo/pod.jpg"
                                    alt="home-pod">
                            </a>
                            <a href="home-pod.html" class="demo-name link">Print On Demand</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-baby.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/baby.jpg" src="images/demo/baby.jpg"
                                    alt="home-baby">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-baby.html" class="demo-name link">Baby</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-plant.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/plant.jpg" src="images/demo/plant.jpg"
                                    alt="home-plant">
                            </a>
                            <a href="home-plant.html" class="demo-name link">Plant</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/jewelry2.jpg" src="images/demo/jewelry2.jpg"
                                    alt="home-jewelry">
                            </a>
                            <a href="home-jewelry2.html" class="demo-name link">Jewelry 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pickleball.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/pickleball.jpg"
                                    src="images/demo/pickleball.jpg" alt="home-pickleball">
                            </a>
                            <a href="home-pickleball.html" class="demo-name link">Pickleball</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-handcraft.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/handcraft.jpg"
                                    src="images/demo/handcraft.jpg" alt="home-handcraft">
                            </a>
                            <a href="home-handcraft.html" class="demo-name link">Handcraft</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-furniture2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/furniture2.jpg"
                                    src="images/demo/furniture2.jpg" alt="home-furniture">
                            </a>
                            <a href="home-furniture2.html" class="demo-name link">Furniture 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skincare2.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/skincare2.jpg"
                                    src="images/demo/skincare2.jpg" alt="home-skincare">
                            </a>
                            <a href="home-skincare2.html" class="demo-name link">Skincare 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-supplement.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/supplement.jpg"
                                    src="images/demo/supplement.jpg" alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-supplement.html" class="demo-name link">Supplement</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-footwear.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/footwear.jpg" src="images/demo/footwear.jpg"
                                    alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-footwear.html" class="demo-name link">Footwear</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-glasses.html" class="demo-image">
                                <img class="lazyload" data-src="images/demo/glasses.jpg" src="images/demo/glasses.jpg"
                                    alt="home-skincare">
                                <div class="demo-label"><span>New</span></div>
                            </a>
                            <a href="home-glasses.html" class="demo-name link">Glasses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal demo -->

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