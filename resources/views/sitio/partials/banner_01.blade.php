<div class="banner banner--1">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                <div class="banner__box">
                    @if(isset($bannersS1))

                    <a href="single-1.html" class="banner__link">
                        <img src="{{ $bannersS1->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-1.png" class="banner__img">
                    </a>
                   
                    @endif
               
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="banner__box">
                    @if(isset($bannersS2))
                    <a href="single-1.html" class="banner__link">
                        <img src="{{ $bannersS2->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-2.png" class="banner__img">
                    </a>
                    @endif
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="banner__box">
                    @if(isset($bannersS3))
                    <a href="single-1.html" class="banner__link">
                        <img src="{{ $bannersS3->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-1.png" class="banner__img">
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> 