<!-- modal quickView -->
<div class="modal fade modalCentered modal-quick-view" id="quickView">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>

            <div class="tf-product-media-wrap">
                <div dir="ltr" class="swiper tf-single-slide">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" data-color="black">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/product1.jpg"
                                     src="images/products/bags/product1.jpg"
                                     alt="Zilly Laptop Bag Black">
                            </div>
                        </div>

                        <div class="swiper-slide" data-color="brown">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/product2.jpg"
                                     src="images/products/bags/product2.jpg"
                                     alt="Zilly Laptop Bag Brown">
                            </div>
                        </div>

                        <div class="swiper-slide" data-color="navy">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/product3.jpg"
                                     src="images/products/bags/product3.jpg"
                                     alt="Zilly Laptop Bag Navy">
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev nav-swiper arrow-1 nav-prev-cls single-slide-prev"></div>
                    <div class="swiper-button-next nav-swiper arrow-1 nav-next-cls single-slide-next"></div>
                </div>
            </div>

            <div class="tf-product-info-wrap">
                <div class="tf-product-info-inner">

                    <div class="tf-product-heading">
                        <h6 class="product-name">
                            <a class="link" href="product-detail.php">
                                Zilly Premium Laptop Bag
                            </a>
                        </h6>

                        <div class="product-price">
                            <h6 class="price-new price-on-sale">₹2,999</h6>
                            <h6 class="price-old">₹3,999</h6>
                            <span class="badge-sale">25% Off</span>
                        </div>

                        <p class="text">
                            Premium quality Zilly laptop bag with padded laptop compartment,
                            durable material, and multiple storage sections — perfect for office
                            and daily use.
                        </p>
                    </div>

                    <div class="tf-product-variant">

                        <!-- Color -->
                        <div class="variant-picker-item variant-color">
                            <div class="variant-picker-label">
                                Color:
                                <span class="variant-picker-label-value value-currentColor">Black</span>
                            </div>

                            <div class="variant-picker-values">
                                <div class="hover-tooltip color-btn active" data-color="black">
                                    <span class="check-color bg-dark"></span>
                                    <span class="tooltip">Black</span>
                                </div>
                                <div class="hover-tooltip color-btn" data-color="brown">
                                    <span class="check-color bg-brown"></span>
                                    <span class="tooltip">Brown</span>
                                </div>
                                <div class="hover-tooltip color-btn" data-color="navy">
                                    <span class="check-color bg-navy"></span>
                                    <span class="tooltip">Navy Blue</span>
                                </div>
                            </div>
                        </div>

                        <!-- Size -->
                        <div class="variant-picker-item variant-size">
                            <div class="variant-picker-label">
                                <div>
                                    Size:
                                    <span class="variant-picker-label-value value-currentSize">15.6 Inch</span>
                                </div>
                            </div>

                            <div class="variant-picker-values">
                                <span class="size-btn active" data-size="14-inch">14</span>
                                <span class="size-btn" data-size="15-6-inch">15.6</span>
                                <span class="size-btn" data-size="17-inch">17</span>
                            </div>
                        </div>

                    </div>

                    <div class="tf-product-total-quantity">
                        <div class="group-btn">
                            <div class="wg-quantity">
                                <button class="btn-quantity minus-btn">-</button>
                                <input class="quantity-product font-4" type="text" name="number" value="1">
                                <button class="btn-quantity plus-btn">+</button>
                            </div>

                            <a href="#shoppingCart"
                               data-bs-toggle="offcanvas"
                               class="tf-btn hover-primary">
                                Add to cart
                            </a>
                        </div>

                        <a href="checkout.html"
                           class="tf-btn w-100 animate-btn paypal btn-primary">
                            Buy It Now
                        </a>

                        <a href="checkout.html" class="more-choose-payment link">
                            More payment options
                        </a>
                    </div>

                    <a href="product-detail.php" class="view-details link">
                        View full details <i class="icon icon-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- /modal quickView -->
