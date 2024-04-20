


{{-- ////////////////////////// --}}

  <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->
  <div class="product product--1 swiper-outside-arrow-hover">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-content section-content--border">
                    <h5 class="section-content__title ">Ultimos Productos</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-outside-arrow-fix pos-relative">
                    <div class="product-counter-slider overflow-hidden m-t-50">
                        <div class="swiper-wrapper">
                            @foreach ($products_last as $product)
                                <!-- Start Single Counter Product -->
                                
                                <div class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                    <div class="product__img-box">

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
                                         
                                            <input type="hidden" value="{{ $imagen->path_image_200x200 }}" id="img" name="img">
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

                                       

                                    
                                        <!-- <span class="product__tag product__tag--new">New</span> -->
                                        
                                    </div>
                                    <div class="product__price m-t-10">
                                        @if(isset($product->precio_oferta))
                                                
                                                <span class="product__price-del">${{$product->precio}}</span>
                                                <span class="product__price-reg">${{$product->precio_oferta}}</span>
                                        @else
                                            <span class="product__price-reg">${{$product->precio}}</span>
                                        @endif

                                    </div>
                                    <a href="{{ route('product.detail', ['id' => $product->slug]) }}" class="product__link product__link--underline product__link--weight-regular m-t-15">
                                      
                                       {{ Str::limit($product->name, 25) }}
                                    </a>
                                </div>

                              
                                <!-- End Single Counter Product -->
          
                            @endforeach
                         
                   

                        </div>
                        <div class="swiper-buttons">
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-hidden default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                            <div class="swiper-button-prev swiper-button-hidden default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div> 
<!-- ::::::  End Product-Style - Counter Section  ::::::  -->