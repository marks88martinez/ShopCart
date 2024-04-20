<div class="hero hero-slider hero--1">
    <div class="swiper-wrapper">
        <!-- Start Hero Image -->

        @foreach ($banners as $banner)
        <div class="hero-img hero-img--1 swiper-slide " style="background-image: url({{$banner->path_image}});">
            
            <div class="hero__content">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-7 col-sm-10 col-12">
                            <div class="title title--large title--thin">SMART TV 4K</div>
                            <div class="title title--large title--regular">QLED 75 INCH Q7F</div>
                            <div class="title title--description">Exclusive Offer <span class="title--blue">-20% Off</span> This Week</div>
                            <a href="single-1.html" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                        </div> 
                     </div> -->
                </div>
            </div>
        </div> 

            
        @endforeach
        <!-- End Hero Image -->

        <!-- Start Hero Image -->

        {{-- /////////////////// slide 2 ////////////////// --}}
        {{-- <div class="hero-img hero-img--1 swiper-slide" style="background-image: url(template_front/assets/img/hero/hero-home-1-img-2.jpg);"> --}}
            <!-- <div class="hero__content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-12">
                            <div class="title title--large title--thin">MICROWAVE</div>
                            <div class="title title--large title--regular">TOASTER OVEN 2019</div>
                            <div class="title title--description">Exclusive Offer <span class="title--blue">-20% Off</span> This Week</div>
                            <a href="single-1.html" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                        </div>
                    </div>
                </div>
            </div> -->
        {{-- </div>  --}}
        {{-- ////////////////////slide 2 ///////////////// --}}

        <!-- End Hero Image -->
        <!-- Start Hero Image -->
        <!-- <div class="hero-img hero-img--1 swiper-slide" style="background-image: url(template_front/assets/img/hero/hero-home-1-img-3.jpg);">
            <div class="hero__content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-10 col-12">
                            <div class="title title--large title--thin">SAMSUNG</div>
                            <div class="title title--large title--regular">GALAXY S9 / S9+</div>
                            <div class="title title--description">Exclusive Offer <span class="title--blue">-20% Off</span> This Week</div>
                            <a href="single-1.html" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Shopping Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
         <!-- End Hero Image -->
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination hero__dots"></div>
    <!-- Add Arrows -->
    <div class="swiper-buttons">
        <!-- Add Arrows -->
        <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
        <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
    </div>
</div> 