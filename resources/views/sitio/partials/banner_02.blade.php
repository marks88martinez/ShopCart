   <!-- ::::::  Start banner Section  ::::::  -->
   <div class="banner banner--1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="banner__box">
                    @if(isset($bannersS4))
                        <a href="single-1.html" class="banner__link">
                            <img src="{{ $bannersS4->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-4.png" class="banner__img">
                        </a>
                    @endif
                   
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="banner__box">
                    @if(isset($bannersS5))
                        <a href="single-1.html" class="banner__link">
                            <img src="{{ $bannersS5->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-4.png" class="banner__img">
                        </a>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End banner Section  ::::::  -->

