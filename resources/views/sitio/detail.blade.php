@extends('layouts.app')

@section('content')

    <div  class="container" style="margin-top: 80px">
        <div class="row">
            <!-- Start Product Details Gallery -->
            <div class="col-12">
                <div class="product-details">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery-box m-b-60">
                                <div class="product-image--large overflow-hidden">
                                    @if ($product->productoImagen->count())

                                        @if($product->productoImagenes->isNotEmpty())
                                            <img class="img-fluid" id="img-zoom" src="{{ asset($product->productoImagenes->first()->path_image) }}" alt="">
                                        @endif
                                     @else
                                  
                                        <a href="#" >
                                            <img class="img-full" src="/imagenes/img_alt.png">
                                        </a>
                                   
                    
                                      @endif
                                    
                                    {{-- <img class="img-fluid" id="img-zoom" src="{{ asset('template_front/assets/img/product/gallery/gallery-large/product-gallery-large-1.jpg') }}" alt=""> --}}
                                   
                                </div>
                                <div class="pos-relative m-t-30">
                                    <div id="gallery-zoom" class="product-image--thumb product-image--thumb-horizontal overflow-hidden swiper-outside-arrow-hover m-lr-30">
                                        

                                            @if ($product->productoImagenes->count() == 1)
                                    
                                            @else
                                                   
                                            <div class="swiper-wrapper">
                                               
                                                @foreach ($product->productoImagenes as  $imagen)

                                                    <div class="swiper-slide">

                                                        <a class="zoom-active" data-image="{{ asset($imagen->path_image) }}" data-zoom-image="{{ asset($imagen->path_image) }}">
                                                           
                                                            <img class="img-fluid" src="{{ asset($imagen->path_image) }}" alt="">
                                                        </a>
                                                    </div>

 
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="swiper-buttons">
                                                    <!-- Add Arrows -->
                                                    <div class="swiper-button-next gallery__nav gallery__nav--next"><i class="fal fa-chevron-right"></i></div>
                                                    <div class="swiper-button-prev gallery__nav gallery__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                                </div>
                                                
                                            @endif
                                           

                                           
                                        
                                       
                                    </div>
                                  {{-- /////////////// --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-details-box">
                                <h5 class="section-content__title">{{$product->name}}</h5>
                                <span class="text-reference">Code: {{$product->sku}}</span>
                                
                                <div class="product__price">
                                    @if(isset($product->precio_oferta))
                                                
                                    <span class="product__price-del">${{$product->precio}}</span>
                                    <span class="product__price-reg">${{$product->precio_oferta}}</span>
                                    @else
                                        <span class="product__price-reg">${{$product->precio}}</span>
                                    @endif

                                </div>
                                <div class="product__desc m-t-25 m-b-30">
                                    <p> 
                                        {!! $product->description !!}
                                    </p>
                                </div>
                                <div class="product-var p-t-30">
                    
                                    <div class="product-quantity product-var__item">
                                        <span class="product-var__text">Cantidad</span>
                                        <div class="product-quantity-box">
                                           
                                            {{-- /////////////////////////////////////////// --}}
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $product->precio }}" id="precio" name="precio">
                                                
                                                @foreach ($product->productoImagen as  $imagen)
                                             
                                                <input type="hidden" value="{{ $imagen->path_image }}" id="img" name="img">
                                                @endforeach
        
                                                <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                                <div class="quantity">
                                                    <input type="number" min="1" max="9" step="1" value="1" id="quantity" name="quantity">
                                                </div>
                                                {{-- <input type="hidden" value="1" id="quantity" name="quantity"> --}}
                                                {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}
    
                                                {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                      {{-- <div class="row"> --}}
                                                        <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-l-20" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add al Carrito
                                                        </button>
                                                    {{-- </div> --}}
                                                {{-- </div> --}}
                                            </form>
                                            {{-- /////////////////////////////////////////// --}}
                                          
                                            {{-- <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight m-l-20">Add to cart</a> --}}
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="product-links ">
                                    <div class="product-social m-tb-30">
                                        <span>Share</span>
                                        <ul class="product-social-link">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            
        
            
        </div>
            <!-- End Product Details Gallery -->
            
            @include('sitio.partials.product_03')
            
            
            <!-- End Product Details Gallery -->
    </div>
@endsection
