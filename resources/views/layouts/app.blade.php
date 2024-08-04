<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'E-COMMERCE TIENDA' }}</title>
    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="template_front/assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
   
    
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/vendor/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/vendor/plaza-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Plugin CSS Files -->

    <link rel="stylesheet" href="{{ asset('template_front/assets/css/plugin/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/plugin/material-scrolltop.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/plugin/price_range_style.css') }}">
    <link rel="stylesheet" href="{{ asset('template_front/assets/css/plugin/in-number.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('template_front/assets/css/plugin/venobox.min.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('template_front/assets/css/main.css') }}">
    <!-- Main Style CSS File -->
    <style>
    .swiper-wrapper {
        position: relative;
        width: 100%;
        height:85%;
        z-index: 1;
        display: flex;
        transition-property: transform;
        box-sizing: content-box
    }
    .footer__social-nav>li>a{
        margin-top: 2px;
    }
    .m-lr-30 {
        height: 15%;
    }
    .fab {
    font-family: 'Font Awesome 5 Brands';
    margin-top: 10px;
    }
  


    .whatsapp-float {
    position: fixed;
    bottom: 80px;
    right: 20px;
    /* z-index: 1000; */
    transition: bottom 0.3s ease;
}

.whatsapp-float:hover {
    bottom: 100px;
}

.whatsapp-float img {
    width: 50px; /* Tamaño más pequeño del icono */
    height: auto;
    border-radius: 50%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
}

/* Estilo para el carrito */
#carrito {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}


    </style>

</head>
<body>
<div id="app">
    @include('sitio.partials.header')
    {{-- @include('sitio.partials.navbar') --}}
    <main id="main-container" class="main-container">

        @yield('content')
    </main>
    @include('sitio.partials.footer')

    {{-- //////////////////////////////////// --}}
        <!-- material-scrolltop button -->
        <button class="material-scrolltop" type="button"></button>

        <!-- Start Modal Add cart -->
        <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-center">Product Successfully Added To Your Shopping Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="modal__product-img">
                                            <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="modal__product-title">SonicFuel Wireless Over-Ear Headphones</span>
                                        <span class="modal__product-price m-tb-15">$31.59</span>
                                        <ul class="modal__product-info ">
                                            <li>Size:<span> S</span></li>
                                            <li>Quantity:<span>3</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 modal__border">
                                <span class="modal__product-cart-item">There are 3 items in your cart.</span>
                                <ul class="modal__product-shipping-info m-tb-15">
                                    <li>Total products:<span>$94.78</span></li>
                                    <li>Total shipping:<span>$7.00</span></li>
                                    <li>Taxes:<span>$0.00</span></li>
                                    <li>Total: <span>$101.78 (tax excl.)</span></li>
                                </ul>
                                
                                <div class="modal__product-cart-buttons">
                                    <a href="#" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight" data-dismiss="modal">Continue Shopping</a>
                                    <a href="checkout.html" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Process to checkout</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div> <!-- End Modal Add cart -->
    {{-- //////////////////////////////////// --}}
    <div class="whatsapp-float" style=" z-index: 100;">
        <a href="https://wa.me/+595981278616?text=%C2%A1Hola%2C%20quiero%20saber%20m%C3%A1s%21" target="_blank">
            <img src="{{asset('imagenes/whatsapp.png')}}" alt="WhatsApp">
        </a>
    </div>
    
    
    {{-- //////////////////////////////////// --}}
</div>
    <!-- Vendor JS Files -->
    <script src="{{ asset('template_front/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/vendor/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/vendor/bootstrap.bundle.js') }}"></script>
    
    
    
    <!-- Plugins JS Files -->
    <script src="{{ asset('template_front/assets/js/plugin/swiper.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/material-scrolltop.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/price_range_script.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/in-number.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/jquery.elevateZoom-3.0.8.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/plugin/venobox.min.js') }}"></script>
    <script src="{{ asset('template_front/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.addEventListener('scroll', function() {
        var whatsappFloat = document.getElementById('whatsappFloat');
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop === 0) {
            whatsappFloat.style.bottom = '80px'; /* Posición original cuando el scroll está en la parte superior */
        }
    });

    </script>





</body>
</html>

