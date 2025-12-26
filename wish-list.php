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
                    <h4 class="title">My Wishlist</h4>
                    <div class="breadcrumb-list">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <div class="breadcrumb-item dot"><span></span></div>
                        <div class="breadcrumb-item current">Wishlist</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Title Page -->

        <!-- Wish list -->
        <section class="flat-spacing-13">
            <div class="container">
                <div class="wrapper-wishlist tf-grid-layout tf-col-2 lg-col-3 xl-col-4">
                    <!-- Card Product 1 -->
                    <div class="card-product style-wishlist style-3 card-product-size">
                        <i class="icon icon-close remove"></i>
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload"
                                    data-src="images/products/bags/product1.jpg"
                                    src="images/products/bags/product1.jpg" alt="image-product">
                                <img class="img-hover lazyload"
                                    data-src="images/products/bags/product2.jpg"
                                    src="images/products/bags/product2.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon hover-tooltip quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon hover-tooltip compare">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md"> Zilly Urban Backpack</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$120.00</span>
                                <span class="price-old">$150.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item active hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class="lazyload"
                                        data-src="images/products/bags/product1.jpg"
                                        src="images/products/bags/product1.jpg" alt="">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot">
                                    <span class="tooltip color-filter">Black</span>
                                    <span class="swatch-value bg-dark"></span>
                                    <img class="lazyload"
                                        data-src="images/products/bags/product2.jpg"
                                        src="images/products/bags/product2.jpg" alt="">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot line">
                                    <span class="tooltip color-filter">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class="lazyload"
                                        data-src="images/products/bags/product3.jpg"
                                        src="images/products/bags/product3.jpg" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 2 -->
                    <div class="card-product style-wishlist style-3 out-of-stock">
                        <i class="icon icon-close remove"></i>
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload"
                                    data-src="images/products/bags/product3.jpg"
                                    src="images/products/bags/product3.jpg" alt="image-product">
                                <img class="img-hover lazyload"
                                    data-src="images/products/bags/product3.jpg"
                                    src="images/products/bags/product3.jpg" alt="image-product">
                            </a>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md">Zilly Office Laptop Bag</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$130.00</span>
                            </p>
                        </div>
                    </div>
                    <!-- Card Product 3 -->
                    <div class="card-product style-wishlist style-3 card-product-size">
                        <i class="icon icon-close remove"></i>
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload"
                                    data-src="images/products/bags/product4.jpg"
                                    src="images/products/bags/product4.jpg" alt="image-product">
                                <img class="img-hover lazyload"
                                    data-src="images/products/bags/product5.jpg"
                                    src="images/products/bags/product5.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon hover-tooltip quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon hover-tooltip compare">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="countdown-box">
                                <div class="js-countdown" data-timer="1007500" data-labels="D  :,H  :,M  :,S">
                                </div>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md"> Zilly Travel Duffel Bag</a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$60.00</span>
                                <span class="price-old">$70.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item active hover-tooltip tooltip-bot">
                                    <span class="tooltip">Yellow</span>
                                    <span class="swatch-value bg-yellow"></span>
                                    <img class="lazyload" data-src="images/products/bags/product4.jpg" src="images/products/bags/product4.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot">
                                    <span class="tooltip">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class="lazyload" data-src="images/products/bags/product5.jpg" src="images/products/bags/product5.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot line">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class="lazyload" data-src="images/products/bags/product6.jpg" src="images/products/bags/product6.jpg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 4 -->
                    <div class="card-product style-wishlist style-3 card-product-size">
                        <i class="icon icon-close remove"></i>
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload"
                                    data-src="images/products/bags/product6.jpg"
                                    src="images/products/bags/product6.jpg" alt="image-product">
                                <img class="img-hover lazyload"
                                    data-src="images/products/bags/product7.jpg"
                                    src="images/products/bags/product7.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon hover-tooltip quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon hover-tooltip compare">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md"> Zilly Leather Handbag
                            </a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$80.00</span>
                                <span class=" price-old">$100.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item active hover-tooltip tooltip-bot">
                                    <span class="tooltip">Yellow</span>
                                    <span class="swatch-value bg-yellow"></span>
                                    <img class="lazyload" data-src="images/products/bags/product4.jpg" src="images/products/bags/product4.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot">
                                    <span class="tooltip">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class="lazyload" data-src="images/products/bags/product5.jpg" src="images/products/bags/product5.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot line">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class="lazyload" data-src="images/products/bags/product6.jpg" src="images/products/bags/product6.jpg">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card Product 5 -->
                    <div class="card-product style-wishlist style-3 card-product-size">
                        <i class="icon icon-close remove"></i>
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="img-product lazyload"
                                    data-src="images/products/bags/product2.jpg"
                                    src="images/products/bags/product2.jpg" alt="image-product">
                                <img class="img-hover lazyload"
                                    data-src="images/products/bags/product1.jpg"
                                    src="images/products/bags/product1.jpg" alt="image-product">
                            </a>
                            <ul class="list-product-btn">
                                <li>
                                    <a href="#shoppingCart" data-bs-toggle="offcanvas" class="box-icon hover-tooltip">
                                        <span class="icon icon-cart2"></span>
                                        <span class="tooltip">Add to Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal"
                                        class="box-icon hover-tooltip quickview">
                                        <span class="icon icon-view"></span>
                                        <span class="tooltip">Quick View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                        class="box-icon hover-tooltip compare">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="name-product link fw-medium text-md"> Zilly Mini Sling Bag
                            </a>
                            <p class="price-wrap fw-medium">
                                <span class="price-new">$40.00</span>
                                <span class=" price-old">$60.00</span>
                            </p>
                            <ul class="list-color-product">
                                <li class="list-color-item active hover-tooltip tooltip-bot">
                                    <span class="tooltip">Yellow</span>
                                    <span class="swatch-value bg-yellow"></span>
                                    <img class="lazyload" data-src="images/products/bags/product4.jpg" src="images/products/bags/product4.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot">
                                    <span class="tooltip">Grey</span>
                                    <span class="swatch-value bg-grey-4"></span>
                                    <img class="lazyload" data-src="images/products/bags/product5.jpg" src="images/products/bags/product5.jpg">
                                </li>
                                <li class="list-color-item hover-tooltip tooltip-bot line">
                                    <span class="tooltip">White</span>
                                    <span class="swatch-value bg-white"></span>
                                    <img class="lazyload" data-src="images/products/bags/product6.jpg" src="images/products/bags/product6.jpg">
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <ul class="wg-pagination">
                        <li class="active">
                            <div class="pagination-item">1</div>
                        </li>
                        <li>
                            <a href="#" class="pagination-item">2</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-item">3</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-item"><i class="icon-arr-right2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /Wish list-->

        <!-- Recently Viewed -->
        <section class="flat-spacing section-viewed pt-0">
            <div class="container">
                <div class="flat-title wow fadeInUp">
                    <h4 class="title">Recently Viewed</h4>
                </div>
                <div class="fl-control-sw wrap-pos-nav sw-over-product wow fadeInUp">
                    <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-swiper='{
                        "slidesPerView": 2,
                        "spaceBetween": 12,
                        "speed": 800,
                        "observer": true,
                        "observeParents": true,
                        "slidesPerGroup": 2,
                        "navigation": {
                            "clickable": true,
                            "nextEl": ".nav-next-viewed",
                            "prevEl": ".nav-prev-viewed"
                        },
                        "pagination": { "el": ".sw-pagination-viewed", "clickable": true },
                        "breakpoints": {
                        "768": { "slidesPerView": 3, "spaceBetween": 12, "slidesPerGroup": 3 },
                        "1200": { "slidesPerView": 4, "spaceBetween": 24, "slidesPerGroup": 4}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- item 1 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2 card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-5.jpg"
                                                src="images/products/fashion/product-5.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-22.jpg"
                                                src="images/products/fashion/product-22.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="size-box">
                                            <li class="size-item text-xs text-white">XS</li>
                                            <li class="size-item text-xs text-white">S</li>
                                            <li class="size-item text-xs text-white">M</li>
                                            <li class="size-item text-xs text-white">L</li>
                                            <li class="size-item text-xs text-white">XL</li>
                                            <li class="size-item text-xs text-white">2XL</li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item">20% Off</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html"
                                            class="name-product link fw-medium text-md">Turtleneck T-shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$80.00</span>
                                            <span class=" price-old">$100.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-4"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-5.jpg"
                                                    src="images/products/fashion/product-5.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-22.jpg"
                                                    src="images/products/fashion/product-22.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-40.jpg"
                                                    src="images/products/fashion/product-40.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 2 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-12.jpg"
                                                src="images/products/fashion/product-12.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-39.jpg"
                                                src="images/products/fashion/product-39.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item trending">Trending</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Loose
                                            Fit Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$65.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-12.jpg"
                                                    src="images/products/fashion/product-12.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-39.jpg"
                                                    src="images/products/fashion/product-39.jpg" alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 3 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-11.jpg"
                                                src="images/products/fashion/product-11.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-7.jpg"
                                                src="images/products/fashion/product-7.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap">
                                            <span class="on-sale-item">20% Off</span>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500"
                                                data-labels="D  :,H  :,M  :,S"></div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Crop
                                            T-shirt</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$45.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch line hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-11.jpg"
                                                    src="images/products/fashion/product-11.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-7.jpg"
                                                    src="images/products/fashion/product-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Light Orange</span>
                                                <span class="swatch-value bg-light-orange-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-18.jpg"
                                                    src="images/products/fashion/product-18.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 4 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-31.jpg"
                                                src="images/products/fashion/product-31.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-13.jpg"
                                                src="images/products/fashion/product-13.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="on-sale-wrap type-2">
                                            <span class="on-sale-item limited">Limited</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Short
                                            Sleeve Sweat</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$130.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li
                                                class="list-color-item color-swatch hover-tooltip line tooltip-bot active">
                                                <span class="tooltip color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-31.jpg"
                                                    src="images/products/fashion/product-31.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Black</span>
                                                <span class="swatch-value bg-dark"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-13.jpg"
                                                    src="images/products/fashion/product-13.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- item 5 -->
                            <div class="swiper-slide">
                                <div class="card-product style-2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product lazyload"
                                                data-src="images/products/fashion/product-30.jpg"
                                                src="images/products/fashion/product-30.jpg" alt="image-product">
                                            <img class="img-hover lazyload"
                                                data-src="images/products/fashion/product-10.jpg"
                                                src="images/products/fashion/product-10.jpg" alt="image-product">
                                        </a>
                                        <ul class="list-product-btn">
                                            <li>
                                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-cart2"></span>
                                                    <span class="tooltip">Add to Cart</span>
                                                </a>
                                            </li>
                                            <li class="wishlist">
                                                <a href="javascript:void(0);" class="box-icon hover-tooltip">
                                                    <span class="icon icon-heart2"></span>
                                                    <span class="tooltip">Add to Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#quickView" data-bs-toggle="modal"
                                                    class="box-icon quickview hover-tooltip">
                                                    <span class="icon icon-view"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </li>
                                            <li class="compare">
                                                <a href="#compare" data-bs-toggle="modal" aria-controls="compare"
                                                    class="box-icon hover-tooltip">
                                                    <span class="icon icon-compare"></span>
                                                    <span class="tooltip">Add to Compare</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="name-product link fw-medium text-md">Breeze
                                            Soft Tee</a>
                                        <p class="price-wrap fw-medium">
                                            <span class="price-new">$50.00</span>
                                            <span class=" price-old">$70.00</span>
                                        </p>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot active">
                                                <span class="tooltip color-filter">Purple</span>
                                                <span class="swatch-value bg-purple-3"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-30.jpg"
                                                    src="images/products/fashion/product-30.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch hover-tooltip tooltip-bot">
                                                <span class="tooltip color-filter">Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" lazyload" data-src="images/products/fashion/product-10.jpg"
                                                    src="images/products/fashion/product-10.jpg" alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex d-xl-none sw-dot-default sw-pagination-viewed justify-content-center"></div>
                    </div>
                    <div class="d-none d-xl-flex swiper-button-next nav-swiper nav-next-viewed"></div>
                    <div class="d-none d-xl-flex swiper-button-prev nav-swiper nav-prev-viewed"></div>
                </div>
            </div>
        </section>
        <!-- /Recently Viewed -->

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