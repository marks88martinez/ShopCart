<div class="col-lg-3">

    <div class="sidebar">
        <!-- Start Single Sidebar Widget -->
        <div class="sidebar__widget gray-bg">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Productos</h5>
            </div>
            <ul class="sidebar__menu-collapse">
                 <!-- Start Single Menu Collapse List -->
                 @foreach ($categorias as $categoria)
                 <li class="sidebar__menu-collapse-list">
                    <div class="accordion">
               
                        @if ($categoria->children->isNotEmpty())   
                            <a href="{{ url('products/'.$categoria->id) }}"  class="accordion__title" data-toggle="collapse" data-target="#{{$categoria->name}}">
                        @else
                            <a href="{{ url('products/'.$categoria->id) }}"  class="accordion__title"  >
                        @endif
                           
                            {{$categoria->name}}
                            @if ($categoria->children->isNotEmpty())
                                <i class="icon-chevron-down"></i>
                            @endif
                        </a>

                        <div id="{{$categoria->name}}" class="collapse">
                            <ul class="accordion__category-list">
                                @foreach ($categoria->children as $children)
                          
                                <li>  <a href="{{ url('products/'.$children->id) }}" >{{$children->name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </li>  
                 @endforeach
               
                <!-- End Single Menu Collapse List -->
           
            </ul>
        </div>  <!-- End Single Sidebar Widget -->

        <!-- Start Single Sidebar Widget -->
        {{-- <div class="sidebar__widget gray-bg">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Filter By</h5>
                <a href="" class="btn btn--box btn--blue btn--small"><i class="far fa-times"></i> Clear All</a>
            </div>
            <div class="sidebar__box m-t-40">
                <h5 class="sidebar__title">Fashion</h5>
            </div>
            <ul class="sidebar__menu-filter ">
                 <!-- Start Single Menu Filter List -->
                <li class="sidebar__menu-filter-list">
                    <label for="men"><input type="checkbox" name="gender" value="Men" id="men"><span>Men</span></label>
                </li>  <!-- End Single Menu Filter List -->
                <li class="sidebar__menu-filter-list">
                    <label for="women"><input type="checkbox" name="gender" value="women" id="women"><span>Women</span></label>
                </li>  <!-- End Single Menu Filter List -->
                <li class="sidebar__menu-filter-list">
                    <label for="kids"><input type="checkbox" name="gender" value="kids" id="kids"><span>Kids</span></label>
                </li>  <!-- End Single Menu Filter List -->
            </ul>

            <div class="sidebar__box m-t-40">
                <h5 class="sidebar__title">Brand</h5>
            </div>
            <ul class="sidebar__menu-filter ">
                 <!-- Start Single Menu Filter List -->
                <li class="sidebar__menu-filter-list">
                    <label for="graphic-corner"><input type="checkbox" name="brand" value="graphic-corner" id="graphic-corner"><span>Graphic Corner</span></label>
                </li>  <!-- End Single Menu Filter List -->
                <li class="sidebar__menu-filter-list">
                    <label for="studio-design"><input type="checkbox" name="brand" value="studio-design" id="studio-design"><span>Studio Design</span></label>
                </li>  <!-- End Single Menu Filter List -->
            </ul>
        </div>   --}}
        <!-- End Single Sidebar Widget -->
        
        <!-- Start Single Sidebar Widget -->
        {{-- <div class="sidebar__widget gray-bg">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Price</h5>
            </div>
            <div class="sidebar__price-filter ">
                <div id="slider-range" class="price-filter-range"></div>
                <div class="slider__price-filter-input d-flex justify-content-between">
                    <input type="number" min=0 max="990" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
                    <input type="number" min=0 max="1000" oninput="validity.valid||(value='100');" id="max_price" class="price-range-field" />
                </div>
            </div>
        </div>   --}}
        <!-- End Single Sidebar Widget -->

        <!-- Start Single Sidebar Widget -->
        {{-- <div class="sidebar__widget gray-bg">
            <div class="sidebar__box">
                <h5 class="sidebar__title">Color</h5>
            </div>
            <div class="sidebar__color-filter ">
                <label class="product-color"><input type="checkbox" class="product-color-select" value="color-red"><span></span></label>
                <label class="product-color" ><input type="checkbox" class="product-color-select"   value="color-green" checked><span></span></label>
                <label class="product-color" ><input type="checkbox" class="product-color-select"   value="color-blue"><span></span></label>
            </div>
        </div>   --}}
        <!-- End Single Sidebar Widget -->

        <!-- ::::::  Start banner Section  ::::::  -->
        <div class="sidebar__widget banner">
            <div class="row">
                <div class="col-12">
                    <div class="banner__box">
                        @if(isset($bannersS8))
                        <a href="single-1.html" class="banner__link">
                            <img src="{{ $bannersS8->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-2.png" class="banner__img">
                        </a>
                        @endif
                        {{-- <a href="single-1.html" class="banner__link">
                            <img src="{{ asset('template_front/assets/img/banner/banner-shop-1-img-2.jpg') }}"  alt="" class="banner__img">

                        </a> --}}
                    </div>
                </div>
            </div>
        </div> <!-- ::::::  End banner Section  ::::::  -->
    </div>

    
</div>  