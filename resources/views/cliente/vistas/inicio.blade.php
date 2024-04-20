@extends('cliente.headerfooter.headerfooter')
@section('content')

<!-- ==============  -->
<main class="main-section">
    <h1 class="main-title">centro_estético</h1>

    <div class="chicaswrap">
        <img class="chica chica-1 active" src="/sitio/public_html/images/chica-1.png" alt="chica 1">
        <img class="chica chica-2" src="/sitio/public_html/images/2chica-1.png" alt="chica 2">
    </div>
    <div class="circulo">
        <div class="circulito circle-1">
            <img src="/sitio/public_html/images/circulito.jpg" alt="spa">
        </div>
        <div class="circulito circle-2">
            <img src="/sitio/public_html/images/circulito2.jpg" alt="spa">
        </div>
        <div class="circulito circle-3">
            <img src="/sitio/public_html/images/circulito3.jpg" alt="spa">
        </div>
        <div class="circulito circle-4">
            <img src="/sitio/public_html/images/circulito3.jpg" alt="spa">
        </div>
    </div>
    <img onclick="prevSlide();"class="arrow arrow-left" src="/sitio/public_html/images/arrow-left.png" alt="arrow left">
    <img onclick="nextSlide();" class="arrow arrow-right" src="/sitio/public_html/images/arrow-right.png" alt="arrow right">
</main>
<!-- ==============  -->
{{-- Banner Estatico
========================= --}}
<!-- ==============  -->
<section class="franja">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <div class="franja-text">
                    <p>
                        En Unic Spa, queremos todo lo mejor para ti.
                        ¡Nuestros servicios te ayudarán día a día hasta
                        conseguir tu mejor versión!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============  -->


<!-- ==============  -->
<section class="thumbs-section">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumb">
                <div class="thumb-wrap-img">
                    <img src="/sitio/public_html/images/masajes.png" alt="masajes relajantes">
                </div>
                <h5>Masajes Relajantes</h5>
                <small>
                    Una amplia gama de masajes
                    sensitivos, relajantes
                    y terapéuticos.
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumb">
                <div class="thumb-wrap-img">
                    <img src="/sitio/public_html/images/tratamientos.png" alt="tratamientos Corporales">
                </div>
                <h5>Tratamientos Corporales</h5>
                <small>
                    Tratamientos quemadores de grasa,
                    especial, y a la vez relajante.
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumb">
                <div class="thumb-wrap-img">
                    <img src="/sitio/public_html/images/facial.png" alt="tratamientos faciales">
                </div>
                <h5>Tratamientos Faciales</h5>
                <small>
                    Tratamiento para la piel, manchas, arrugas o flacidez.
                </small>
            </div>
        </div>
    </div>
</div>
</section>


<!-- ==============  -->
    <section class="nosotros">
        <img class="puntos1" src="/sitio/public_html/images/puntos.png" alt="puntos 1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="nosotros-wrap-img">
                        <div class="nosotros-img-top">
                            <img class="img-fluid nosotros-decor-top" src="/sitio/public_html/images/piedra-jazmin.png" alt="piedra jazmin">
                        </div>
                        <div class="nosotros-img-main">
                            <img class="img-fluid nosotros-chica-main" src="/sitio/public_html/images/chica-masaje.jpg" alt="masajes">
                        </div>
                        <div class="nosotros-img-down">
                            <img class="img-fluid nosotros-decor-down" src="/sitio/public_html/images/piedra-flor.png" alt="piedra flor">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="nosotros-text">
                        <h3 class="nosotros-h3">UNIC SPA</h3>
                        <p class="nosotros-p">
                            En UNIC SPA encontrarás un verdadero refugio de relajación, bienestar, salud y
                            belleza a través de una cuidadosa selección de tratamientos corporales y faciales
                            atendidas por nuestras profesionales altamente capacitadas. <br><br>

                            Nuestras instalaciones están adaptadas para que nuestras pacientes tengan una
                            experiencia única, que puedan abstraerse del mundo exterior y lograr un momento
                            de estado de calma y tranquilidad en un ambiente cómodo, higiénico y seguro. <br><br>

                            En nuestro spa vemos a los masajes como una terapia curativa que permite que las
                            personas entren en un estado de relajación y sanación, gracias a la energía que
                            transmitimos a través de los diferentes movimientos y presiones que hacemos en el cuerpo. <br>

                        </p>


                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=595985639999&text=Hola!%20=D,%20les%20escribo%20desde%20el%20sitio%20web,%20tengo%20una%20consulta." target="_blank" class="nosotros-btn"> <img src="/sitio/public_html/images/whatsapp.png" alt="whatsapp"> Consultas/Reservas</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="puntos2" src="/sitio/public_html/images/puntos.png" alt="puntos 2">
    </section>
    <!-- ==============  -->

    <section class="info-section">
        <img class="planta" src="/sitio/public_html/images/planta.png" alt="planta">
        <img class="pantufla" src="/sitio/public_html/images/pantuflas.png" alt="pantufla">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center info-titulo">Mas Informaciones </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="info-cuadro">
                    <h4>Dirección</h4>
                    <p>

                        Calle Pampliega - Shopping Mirage - Centro - CDE
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-cuadro">
                    <h4>Horarios</h4>
                    <p>
                        Lunes a Viernes: 09:00 a 20:00 Hs. <br>
                        Sábados de 9:00 a 19:00 Hs.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-cuadro">
                    <h4>Turnos</h4>
                    <p>
                        <img src="/sitio/public_html/images/whatsapp-rosa.png" alt="whatsapp"> 0985 63 99 99
                    </p>
                </div>
            </div>
        </div>
    </div>
        <img class="peine" src="/sitio/public_html/images/peine.png" alt="peine">
    </section>

    <!-- ==============  -->

@endsection


