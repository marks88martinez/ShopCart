<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Unic Spa</title>
    <link rel="icon" href="{{ asset('images/unic-spa.ico') }}">


    <link rel="stylesheet" href="/sitio/public_html/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sitio/public_html/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="/sitio/public_html/css/aos.css">
    <link rel="stylesheet" href="/sitio/public_html/css/styles.css">
    <link rel="stylesheet" href="/sitio/public_html/css/header.css">
    <link rel="stylesheet" href="/sitio/public_html/css/footer.css">
    <link rel="stylesheet" href="/sitio/public_html/css/ionicon.min.css">
    <link rel="stylesheet" href="/sitio/public_html/css/font-awesome.min.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    {{--  <link rel="stylesheet" href="/sitio/public_html/css/lightbox.css">  --}}
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">





</head>
<body >

    <div id="app"></div>
    <header class="header">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="wrapper">
                <div class="header-item-left">
                    <a href="/index.html">
                        <img class="logo-img" src="/sitio/public_html/images/logo-unic.png" alt="Fundacion Sobrevivientes">
                    </a>
                </div>

                <div class="header-item-right">
                    <nav class="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                        </div>
                        <ul class="menu-section">
                            {{--  <li><a href="#">SERVICIOS</a></li>  --}}
                            <li><a href="/tratamientos">TRATAMIENTOS</a></li>
                            <li><a href="/nosotros">NOSOTROS</a></li>
                            <li><a href="/contactos">CONTACTOS</a></li>
                        </ul>
                    </nav>
                    <button type="button" class="menu-mobile-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
        </div>
    </header>

    @yield('content')


    <!-- ==============  -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-desc">
                        <img src="/sitio/public_html/images/logo-unic.png" alt="logo unic">
                        <p>
                            En Unic Spa, queremos todo lo mejor para ti.
                            ¡Nuestros servicios te ayudarán día a día hasta
                            conseguir tu mejor versión!

                        </p>
                    </div>
                </div>
                <div class="col-md-3 footer-flex">
                    <div class="footer-col">
                        <h4>Dirección</h4>
                        <p>
                            Calle Pampliega - Shopping Mirage -
                            Centro - CDE
                        </p>
                    </div>
                </div>
                <div class="col-md-3 footer-flex">
                    <div class="footer-col">
                        <h4>Contactos</h4>
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=595985639999&text=Hola!%20=D,%20les%20escribo%20desde%20el%20sitio%20web,%20tengo%20una%20consulta.">
                            <p>
                                <img src="/sitio/public_html/images/whatsapp.png" alt="whatsapp"> 0985 63 99 99
                            </p>
                        </a>
                        <p>
                            <img src="/sitio/public_html/images/email.png" alt="email"> atencion@unicspa.com
                        </p>
                    </p>
                    </div>
                </div>
                <div class="col-md-3 footer-flex">
                    <div class="footer-col ">
                        <h4>Síguenos</h4>
                       <div class="d-flex justify-content-center align-items-center flex-row">
                        <a class="ml-4" target="_blank"  href="https://www.facebook.com/unicspa.py">
                            <img src="/sitio/public_html/images/facebook.png" alt="whatsapp">
                        </a>
                        <a class="ml-4"  target="_blank"  href="https://www.instagram.com/unicspa.py/">
                            <img src="/sitio/public_html/images/instagram.png" alt="email">
                        </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>
                Powered By <a href="https://goonmkt.com"> <span style="font-weight: bold; color: #E30014;">G</span><span style="font-weight: bold; color: #ffc107;">o</span><span style="font-weight: bold; color: #5594C9;">o</span><span style="font-weight: bold; color: #529053;">n</span> </a> | UNIC SPA© 2021
            </p>
        </div>
    </footer>
    <!-- ==============  -->

    {{--  <script src="/maps/scripts.js"></script>  --}}
    {{--  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>  --}}


    {{-- <script src="{{ asset('js/app.js') }}" ></script> --}}
    {{--  <script src="{{ asset('js/javascript.js') }}" defer></script>  --}}
    {{--  <script src="/js/menu-scroll.js"></script>  --}}
    {{--  <script src="/js/javascript.js"></script>  --}}

    <script src="/sitio/public_html/js/jquery-3.6.0.min.js"></script>
    <script src="/sitio/public_html/js/bootstrap.min.js"></script>
    <script src="/sitio/public_html/js/script.js" defer></script>
    <script src="/sitio/public_html/js/aos.js"></script>
    <script src="/sitio/public_html/js/parallaxvlm.js"></script>
    <script src="/sitio/public_html/js/menu-scroll.js"></script>
    {{--  <script src="/sitio/public_html/js/lb_js/lightbox-plus-jquery.min.js"></script>  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>





    </body>
</html>
