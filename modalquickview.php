<!-- modal quickView -->
<div class="modal fade modalCentered modal-quick-view" id="quickView">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>

            <!-- Product Images -->
            <div class="tf-product-media-wrap">
                <div dir="ltr" class="swiper tf-single-slide">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" data-color="black">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/newproduct1.jpg"
                                     src="images/products/bags/newproduct1.jpg"
                                     alt="Zilly Everyday Tote Bag Black">
                            </div>
                        </div>

                        <div class="swiper-slide" data-color="brown">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/newproduct2.jpg"
                                     src="images/products/bags/newproduct2.jpg"
                                     alt="Zilly Everyday Tote Bag Brown">
                            </div>
                        </div>

                        <div class="swiper-slide" data-color="navy">
                            <div class="item">
                                <img class="lazyload"
                                     data-src="images/products/bags/newproduct3.jpg"
                                     src="images/products/bags/newproduct3.jpg"
                                     alt="Zilly Everyday Tote Bag Navy">
                            </div>
                        </div>

                    </div>

                    <div class="swiper-button-prev nav-swiper arrow-1 nav-prev-cls single-slide-prev"></div>
                    <div class="swiper-button-next nav-swiper arrow-1 nav-next-cls single-slide-next"></div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="tf-product-info-wrap">
                <div class="tf-product-info-inner">

                    <div class="tf-product-heading">
                        <h6 class="product-name">
                            <a class="link" href="product-detail.php">
                                Zilly Everyday Tote Bag
                            </a>
                        </h6>

                        <div class="product-price">
                            <h6 class="price-new price-on-sale">₹1,999</h6>
                            <h6 class="price-old">₹2,499</h6>
                            <span class="badge-sale">20% Off</span>
                        </div>

                        <p class="text">
                            Proudly Indian and thoughtfully designed, the Zilly Everyday Tote Bag
                            features dual zippered compartments, water-resistant lining, and premium
                            vegan leather craftsmanship—perfect for everyday elegance and effortless organization.
                        </p>
                    </div>

                    <!-- Variants -->
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
                                    <span class="variant-picker-label-value value-currentSize">1</span>
                                </div>
                            </div>

                            <div class="variant-picker-values">
                                <span class="size-btn active" data-size="one-size">1</span>
                            </div>
                        </div>

                    </div>

                    <!-- Quantity & CTA -->
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
