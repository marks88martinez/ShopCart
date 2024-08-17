@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('products') }} ">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Productos</li>
            </ol>
        </nav>
       
    </div>
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Leftside - Sidebar -->
            @include('sitio.partials.products.sidebar')
            <!-- End Left Sidebar -->

             <!-- Start Rightside - Content -->
            <div class="col-lg-9">
                <!-- ::::::  Start banner Section  ::::::  -->
                <div class="banner">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__box">
                                {{-- <a href="single-1.html" class="banner__link">
                                    <img src="{{ asset('template_front/assets/img/banner/banner-shop-1-img-1.jpg') }}"  alt="" class="banner__img">
                                </a> --}}
                                @if(isset($bannersS7))
                                <a href="#" class="banner__link">
                                    <img src="{{ $bannersS7->path_image }}" alt="template_front/assets/img/banner/banner-home-1-img-2.png" class="banner__img">
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> <!-- ::::::  End banner Section  ::::::  -->

                <!-- ::::::  Start Sort Box Section  ::::::  -->
                <div class="sort-box m-tb-30">
                    <!-- Start Sort Left Side -->
                    <div class="sort-box__left">
                        <div class="sort-box__tab">
                            <ul class="sort-box__tab-list nav">
                                <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i class="icon-grid"></i>  </a></li>
                                <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i class="icon-list"></i></a></li>
                            </ul>
                        </div>
                        <span>Hay {{$productsCount}} Productos.</span>
                    </div> <!-- Start Sort Left Side -->

                    {{-- <div class="sort-box__right">
                        <span>Ordenar por:</span>
                        <div class="sort-box__option">
                            <label class="select-sort__arrow">
                                <select name="select-sort" class="select-sort">
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3"> Name, Z to A </option>
                                    <option value="4"> Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </label>
                        </div>
                    </div> --}}
                </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                <div class="product-tab-area">
                    <div class="tab-content ">
                        <div class="tab-pane show active clearfix" id="sort-grid">

                            @foreach ($products as $product)
                                <!-- Start Single Default Product -->
                                    <div class="product__box product__box--default product__box--border-hover text-center float-left float-3">
                                        <div class="product__img-box">
                                            <a href="single-1.html" class="product__img--link">
                                                {{-- ////////////////////////////// --}}
                                                @if ($product->productoImagen->count())

                                                    @foreach ($product->productoImagen as  $imagen)
                                                    {{-- <img src=" {{ $imagen->path_image }}"  class="card-img-top mx-auto"
                                                    style="height: 150px; width: 150px;display: block;"> --}}

                                                    <a href="{{ route('product.detail', ['id' => $product->slug]) }}" class="product__img--link">
                                                        <img class="product__img" src="{{ $imagen->path_image_200x200 }}" alt="">
                                                    </a>
                                                    {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a> --}}

                                                    {{-- /////////////////////////////// --}}
                                                    <form action="{{ route('cart.store') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                        <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                        <input type="hidden" value="{{ $product->precio }}" id="precio" name="precio">
                                                        
                                                        @foreach ($product->productoImagen as  $imagen)
                                                    
                                                        <input type="hidden" value="{{ $imagen->path_image }}" id="img" name="img">
                                                        @endforeach
                
                                                        <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                                        {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}

                                                        {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                            {{-- <div class="row"> --}}
                                                                <button class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn" class="tooltip-test" title="add to cart">
                                                                    <i class="fa fa-shopping-cart"></i> Add al Carrito
                                                                </button>
                                                            {{-- </div> --}}
                                                        {{-- </div> --}}
                                                    </form>
                                                    {{-- /////////////////////////////// --}}
                                                    @endforeach
                
                                                @else
                                                    <img src="/imagenes/img_alt.png"  style="width: 80px"></td>
                
                                                @endif

                                       
                                                {{-- ////////////////////////////// --}}
                                            </a>

                                            {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                            <span class="product__tag product__tag--discount">-12%</span>
                                            <a href="wishlist.html" class="product__wishlist-icon"><i class="icon-heart"></i></a> --}}
                                        </div>
                                        <div class="product__price m-t-10">
                                            @if(isset($product->precio_oferta))
                                                
                                                 <span class="product__price-del">${{$product->precio}}</span>
                                                 <span class="product__price-reg">${{$product->precio_oferta}}</span>
                                            @else
                                                @if ($product->precio !=0 )
                                                    <span class="product__price-reg">${{$product->precio}}</span>
                                                @endif
                                            @endif
    
                                            
                                        </div>
                                        <a href="{{ route('product.detail', ['id' => $product->slug]) }}" class="product__link product__link--underline product__link--weight-regular m-t-15">
                                            {{ Str::limit($product->name, 25) }}
                                         </a>
                                    </div> 
                                <!-- End Single Default Product -->
                            @endforeach
                 
                          
                       
                        </div>
                        <div class="tab-pane shop-list" id="sort-list">

                            {{-- ///////////////////////// --}}
                            <!-- Start Single List Product -->
                            @foreach ($products as $product)
                           
                            <div class="product__box product__box--list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product__img-box  ">

                                            {{-- ////////////////IMAGES/////////////////// --}}
                                            @if ($product->productoImagen->count())

                                            @foreach ($product->productoImagen as  $imagen)
                                            {{-- <img src=" {{ $imagen->path_image }}"  class="card-img-top mx-auto"
                                            style="height: 150px; width: 150px;display: block;"> --}}

                                            <a href="{{ route('product.detail', ['id' => $product->slug]) }}" class="product__img--link">
                                                <img class="product__img" src="{{ $imagen->path_image_200x200 }}" alt="">
                                            </a>
                                            {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a> --}}

                                            {{-- /////////////////////////////// --}}
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $product->precio }}" id="precio" name="precio">
                                                
                                                @foreach ($product->productoImagen as  $imagen)
                                            
                                                <input type="hidden" value="{{ $imagen->path_image }}" id="img" name="img">
                                                @endforeach
        
                                                <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}

                                                {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                    {{-- <div class="row"> --}}
                                                        <button class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn text" style="width: 200px" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add al Carrito
                                                        </button>
                                                    {{-- </div> --}}
                                                {{-- </div> --}}
                                            </form>
                                            {{-- /////////////////////////////// --}}
                                            @endforeach
        
                                        @else
                                            <img src="/imagenes/img_alt.png"  style="width: 80px"></td>
        
                                        @endif
                                            {{-- /////////////////////////////////// --}}

                                            {{-- <a href="single-1.html" class="product__img--link">
                                                <img class="product__img" src="template_front_front/assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                            </a>
                                            
                                            <span class="product__tag product__tag--discount">-12%</span> --}}
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5 pos-relative">
                                        <div class="border-right pos-absolute"></div>
                                        <div class="product__price">
                                    
                                            @if(isset($product->precio_oferta))
                                                    <span class="product__price-del">${{$product->precio}}</span>
                                                    <span class="product__price-reg">${{$product->precio_oferta}}</span>
                                            @else
                                                @if ($product->precio !=0 )
                                                    <span class="product__price-reg">${{$product->precio}}</span>
                                                @endif
                                            @endif

                                        </div>
                                        <a href="single-1.html" class="product__link product__link--underline product__link--weight-light m-t-15">
                                            {{ $product->name}}
                                        </a>
                                        <div class="product__desc m-t-25 m-b-30">
                                            <p>
                                               
                                                {!! Str::limit($product->description, 100) !!}
                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3">
                                        <div>
                                            <ul class="shop__list-link">
                                                <li><a href="#modalAddCart" data-toggle="modal" class="btn btn--block btn--small btn--border-blue btn--uppercase btn--weight m-b-15">Add to cart</a></li>
                                                <li><a href="wishlist.html" class="link--gray link--icon-left shop__wishlist-icon m-b-5"><i class="icon-heart"></i>Add To Wishlist</a></li>
                                                <li><a href="#modalQuickView" data-toggle="modal"  class="link--gray link--icon-left shop__quickview-icon"><i class="icon-eye"></i>Quick View</a></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                </div>
                            </div> <!-- Start Single List Product -->
                             {{-- ///////////////////////// --}}

                             @endforeach
                            
                            
                        </div>
                    </div>
                </div>

                <div class="page-pagination">
                   
                    {{-- <span>Showing 1-12 of 13 item(s)</span> --}}
                    {{-- <ul class="page-pagination__list">
                        <li class="page-pagination__item">
                          <a class="page-pagination__link btn btn--gray"  href="#"><i class="icon-chevron-left"></i> Previous</a>
                        </li>
                        <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"  href="#">1</a></li>
                        <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"  href="#">2</a></li>
                        <li class="page-pagination__item">
                          <a class="page-pagination__link btn btn--gray"  href="#">Next<i class="icon-chevron-right"></i></a>
                        </li>
                      </ul> --}}

                      <ul class="page-pagination__list">
                        <!-- Enlace "Anterior" -->
                        @if ($products->onFirstPage())
                            <li class="page-pagination__item disabled">
                                <span class="page-pagination__link btn btn--gray"><i class="icon-chevron-left"></i> Anterior</span>
                            </li>
                        @else
                            <li class="page-pagination__item">
                                <a class="page-pagination__link btn btn--gray" href="{{ $products->previousPageUrl() }}"><i class="icon-chevron-left"></i> Anterior</a>
                            </li>
                        @endif
                        
                        <!-- Enlaces numéricos de páginas -->
                        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            @if ($page == $products->currentPage())
                                <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray" href="{{ $url }}">{{ $page }}</a></li>
                            @else
                                <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    
                        <!-- Enlace "Siguiente" -->
                        @if ($products->hasMorePages())
                            <li class="page-pagination__item">
                                <a class="page-pagination__link btn btn--gray" href="{{ $products->nextPageUrl() }}">Próximo <i class="icon-chevron-right"></i></a>
                            </li>
                        @else
                            <li class="page-pagination__item disabled">
                                <span class="page-pagination__link btn btn--gray">Próximo <i class="icon-chevron-right"></i></span>
                            </li>
                        @endif
                    </ul>
                    
                </div>
            </div>  <!-- Start Rightside - Content -->
            
        </div>
    </div>
<br>
@endsection
