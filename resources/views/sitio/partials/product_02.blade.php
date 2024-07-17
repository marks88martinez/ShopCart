     <!-- ::::::  Start  Product Style - Large Section  ::::::  -->
     <div class="product product--1 gray-bg p-tb-100 swiper-outside-arrow-hover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-content section-content--border d-md-flex align-items-center justify-content-between">
                        <h5 class="section-content__title">Productos</h5>
                        <ul class="tablist tablist--style-blue tablist--style-gap-20 nav">
                              <!-- Mostrar cada categoría y sus productos -->
                              @foreach ($categoriasConProductos as $categoria => $productosPorIndex)
                                {{-- {{$categoria}} --}}
                                
                                <li><a class="nav-link   {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#{{ $categoria}}">{{ $categoria }}</a></li>

                                
                                {{-- <ul>
                                    @foreach ($categoriaConProductos['productos'] as $producto)
                                        <li>{{ $producto->name }} - Precio: {{ $producto->precio }}</li>
                                        @foreach ($producto->productoImagen as  $imagen)
                                        <img class="product__img" src="{{ $imagen->path_image }}" alt="">
                                            
                                        @endforeach
                                    @endforeach
                                </ul> --}}
                                @endforeach

                           
                        </ul>
                    </div>
                </div>
             
            
            

                <div class="col-md-12">
                    <div class="product-large-tab-box">
                        <div class="tab-content tab-animate-zoom">

                          
                            {{-- //////////////////////////////// --}}


                            {{-- //////////////////////////////// --}}
                            {{-- {{dd($categoriasConProductos) }} --}}
                            @foreach ($categoriasConProductos as $categoria => $productosPorIndex)
                           
                            <div class="tab-pane {{ $loop->first ? 'show active' : '' }} " id="{{$categoria}}">
                             
                                <!-- Start Single Tab Content -->
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="large-product-slider overflow-hidden m-t-50">
                                        <div class="swiper-wrapper">
                                           
                                            @foreach ($productosPorIndex as $productos)
                                            {{-- {{dd($productos)}} --}}

                                            @if(!empty($productos))
                                                @php
                                                    $primer_producto = $productos[0];
                                                    // Verificar si existen más elementos antes de acceder a ellos
                                                    $segundo_producto = isset($productos[1]) ? $productos[1] : null;
                                                    $tercer_producto = isset($productos[2]) ? $productos[2] : null;
                                                @endphp
                                                <!-- Aquí puedes acceder a las propiedades de los productos -->
                                            @endif
                                            {{-- {{dd( $primer_producto)}} --}}

                                            {{-- @foreach ($productos as  $producto ) --}}
                                            {{-- {{ dd($producto)}} --}}
                                                <!-- Start Single Large Product -->
                                                <div class="single-large-product swiper-slide">
                                                    <div class="row">
                                                       
                                                            @if(!isset($segundo_producto['producto_imagenes'][0]) && !isset($tercer_producto['producto_imagenes'][0]))
                                                                <div class="col-xl-12 col-lg-7">
                                                            @else
                                                                <div class="col-xl-8 col-lg-7">
                                                            @endif
                                                     
                                                            <div class="product__box product__box--lg-hr product__box--border-hover">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <div class="product__img-box">
                                                                        
                                                                            @if(isset($primer_producto['producto_imagenes'][0]))
                                                                                <a href="{{ route('product.detail', ['id' => $primer_producto['slug']]) }}" class="product__img--link">
                                                                                    <img class="product__img" src="{{ $primer_producto['producto_imagenes'][0]['path_image_1024x1024'] }}" alt="Product Image">
                                                                                </a>
                                                                            @endif
                                                                        
                                                                    
                                                                        {{-- @if($key == 0)
                                                                                <a href="single-1.html" class="product__img--link">
                                                                                    <img class="product__img" src="{{ $imagen->path_image }}" alt="">
                                                                                </a>
                                                                            @endif --}}
                                                                
                                                                        
                                                                            <!-- <span class="product__tag product__tag--new">New</span> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        @if(isset($primer_producto['producto_imagenes'][0]))
                                                                            <div class="product__price">
                                                                                <!-- <span class="product__price-del">$35.90</span> -->
                                                                                @if ($primer_producto['precio'] != 0)
                                       
                                                                                  <span class="product__price-reg">$ {{ $primer_producto['precio'] }}</span>
                                                                                @endif
                                                                            </div>
                                                                            <a href="{{ route('product.detail', ['id' => $primer_producto['slug']]) }}" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                                {{ $primer_producto['name'] }}
                                                                            </a>
                                                                        
                                                                            <div class="product__desc m-t-25 m-b-30">
                                                                                <p>
                                            
                                                                                    {!! Str::limit( $primer_producto['description'] , 150) !!}
                                                                                </p>
                                                                            </div>

                                                                            {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight">Add al cart</a> --}}
                                                                              {{-- /////////////////////////////// --}}
                                                                                <form action="{{ route('cart.store') }}" method="POST">
                                                                                    {{ csrf_field() }}
                                                                                    <input type="hidden" value="{{ $primer_producto['id']  }}" id="id" name="id">
                                                                                    <input type="hidden" value="{{ $primer_producto['name']  }}" id="name" name="name">
                                                                                    <input type="hidden" value="{{ $primer_producto['precio']  }}" id="precio" name="precio">
                                                                                    
                                                                                   
                                                                                
                                                                                    <input type="hidden" value="{{ $primer_producto['producto_imagenes'][0]['path_image_200x200'] }}" id="img" name="img">
                                                                                   
                                            
                                                                                    <input type="hidden" value="{{ $primer_producto['slug']  }}" id="slug" name="slug">
                                                                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                                                                    {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}

                                                                                    {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                                                        {{-- <div class="row"> --}}
                                                                                            <button class="btn btn--box btn--medium btn--gray btn--uppercase btn--weight" class="tooltip-test" title="add to cart">
                                                                                                <i class="fa fa-shopping-cart"></i> Add al Carrito
                                                                                            </button>
                                                                                        {{-- </div> --}}
                                                                                    {{-- </div> --}}
                                                                                </form>
                                                                                {{-- /////////////////////////////// --}}
                                                                        
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-lg-5">
                                                            <div class="row">
                                                                @if(isset($segundo_producto['producto_imagenes'][0]))
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div class="product__box product__box--md product__box--border-hover">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    {{-- <a href="single-1.html" class="product__img--link">
                                                                                        <img class="product__img" src="template_front/assets/img/product/size-normal/product-home-1-img-10.png" alt="">
                                                                                    </a> --}}

                                                                                        @if(isset($segundo_producto['producto_imagenes'][0]))
                                                                                            <a href="{{ route('product.detail', ['id' => $segundo_producto['slug']]) }}" class="product__img--link">
                                                                                                <img class="product__img" src="{{ $segundo_producto['producto_imagenes'][0]['path_image_200x200'] }}" alt="Product Image">
                                                                                            </a>
                                                                                        @endif
                                                                                    <!-- <span class="product__tag product__tag--new">New</span> -->
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                    @if ( $tercer_producto['precio'] != 0)
                                            
                                                                                        <span class="product__price-reg">${{ $segundo_producto['precio'] }}</span>
                                                                                    @endif
                                                                                </div>
                                                                                <a href="{{ route('product.detail', ['id' => $segundo_producto['slug']]) }}" class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    {{ $segundo_producto['name'] }}
                                                                                </a>
                                                                                {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add to cart</a> --}}
                                                                                <br>
                                                                                {{-- /////////////////////////////// --}}
                                                                                <form action="{{ route('cart.store') }}" method="POST">
                                                                                {{ csrf_field() }}
                                                                                <input type="hidden" value="{{ $segundo_producto['id']  }}" id="id" name="id">
                                                                                <input type="hidden" value="{{ $segundo_producto['name']  }}" id="name" name="name">
                                                                                <input type="hidden" value="{{ $segundo_producto['precio']  }}" id="precio" name="precio">
                                                                                
                                                                                
                                                                            
                                                                                <input type="hidden" value="{{ $segundo_producto['producto_imagenes'][0]['path_image_200x200'] }}" id="img" name="img">
                                                                                
                                        
                                                                                <input type="hidden" value="{{ $segundo_producto['slug']  }}" id="slug" name="slug">
                                                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                                                {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}

                                                                                {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                                                    {{-- <div class="row"> --}}
                                                                                        <button class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn" class="tooltip-test" title="add to cart">
                                                                                            <i class="fa fa-shopping-cart"></i> Add 
                                                                                        </button>
                                                                                    {{-- </div> --}}
                                                                                {{-- </div> --}}
                                                                            </form>
                                                                            {{-- /////////////////////////////// --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif

                                                                @if(isset($tercer_producto['producto_imagenes'][0]))
                                                                <div class="col-lg-12 col-md-6 col-12">
                                                                    <div class="product__box product__box--md product__box--border-hover m-t-35">
                                                                        <div class="row align-items-center">
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__img-box">
                                                                                    {{-- <a href="single-1.html" class="product__img--link">
                                                                                        <img class="product__img" src="template_front/assets/img/product/size-normal/product-home-1-img-7.png" alt="">
                                                                                    </a> --}}
                                                                                    <!-- <span class="product__tag product__tag--new">New</span> -->

                                                                                    @if(isset($tercer_producto['producto_imagenes'][0]))
                                                                                        <a href="{{ route('product.detail', ['id' => $tercer_producto['slug']]) }}" class="product__img--link">
                                                                                            <img class="product__img" src="{{ $tercer_producto['producto_imagenes'][0]['path_image_200x200'] }}" alt="Product Image">
                                                                                        </a>
                                                                                    @endif
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6">
                                                                                <div class="product__price">
                                                                                    {{-- <span class="product__price-del">$9.00</span> --}}
                                                                                    @if ( $tercer_producto['precio'] != 0)
                                                                                    <span class="product__price-reg">${{ $tercer_producto['precio'] }}</span>
                                                                                    @endif
                                                                                </div>
                                                                                <a href="{{ route('product.detail', ['id' => $tercer_producto['slug']]) }}" class="product__link product__link--underline product__link--weight-light text-overflow-ellipsis m-t-15">
                                                                                    {{ $tercer_producto['name'] }}
                                                                                </a>
                                                                                <br>
                                                                                {{-- <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--block btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom m-t-25">Add to cart</a> --}}
                                                                                 {{-- /////////////////////////////// --}}
                                                                                 <form action="{{ route('cart.store') }}" method="POST">
                                                                                    {{ csrf_field() }}
                                                                                    <input type="hidden" value="{{ $tercer_producto['id']  }}" id="id" name="id">
                                                                                    <input type="hidden" value="{{ $tercer_producto['name']  }}" id="name" name="name">
                                                                                    <input type="hidden" value="{{ $tercer_producto['precio']  }}" id="precio" name="precio">
                                                                                    
                                                                                    
                                                                                
                                                                                    <input type="hidden" value="{{ $tercer_producto['producto_imagenes'][0]['path_image_200x200'] }}" id="img" name="img">
                                                                                    
                                            
                                                                                    <input type="hidden" value="{{ $tercer_producto['slug']  }}" id="slug" name="slug">
                                                                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                                                                    {{-- <button  class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add al Carrito</button> --}}
    
                                                                                    {{-- <div class="card-footer" style="background-color: white;"> --}}
                                                                                        {{-- <div class="row"> --}}
                                                                                            <button class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn" class="tooltip-test" title="add to cart">
                                                                                                <i class="fa fa-shopping-cart"></i> Add
                                                                                            </button>
                                                                                        {{-- </div> --}}
                                                                                    {{-- </div> --}}
                                                                                </form>
                                                                                {{-- /////////////////////////////// --}}
                                                                           
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Single Large Product -->
                                             {{-- @endforeach --}}
                                             @endforeach
                                         
                                   
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>
                                </div> <!-- End Single Tab Content -->
                            </div>
                            @endforeach
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End Product Style - Large Section  ::::::  -->
