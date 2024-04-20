        <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
        <div class="product product--1 swiper-outside-arrow-hover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content section-content--border d-flex align-items-center justify-content-between">
                            <h5 class="section-content__title">Home </h5>
                            <a href="single-1.html">Mostrar todos los productos <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-outside-arrow-fix pos-relative">
                            <div class="product-default-slider-5grid overflow-hidden  m-t-50">
                                <div class="swiper-wrapper">
                                    @foreach ($products_last as $product)
                                  
                                    <!-- Start Single Default Product -->
                                    <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="template_front/assets/img/product/size-normal/product-home-1-img-1.png" alt="">
                                            </a>

                                            <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                            {{-- <span class="product__tag product__tag--discount">-12%</span> --}}
                                            
                                        </div>
                                        <div class="product__price m-t-10">
                                            <span class="product__price-del">$11.90</span>
                                            <span class="product__price-reg">$10.71</span>
                                        </div>
                                        <a href="single-1.html" class="product__link product__link--underline product__link--weight-light m-t-15">
                                            SonicFuel Wireless Over-Ear Headphones
                                        </a>
                                    </div> 
                                    <!-- End Single Default Product -->
                    
                                    @endforeach
                                </div>
                                <div class="swiper-buttons">
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                    <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->
