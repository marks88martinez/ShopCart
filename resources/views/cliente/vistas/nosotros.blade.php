@extends('cliente.headerfooter.headerfooter')
@section('content')



{{-- Trabajos realizados
========================= --}}

<section class="thumb-section" style="margin-top: 3rem;">
    <div class="container">
        <div class="row" style="background: #e5b7b2; ">
            <div class="col-12 d-flex justify-content-center align-items-center my-5" >
              <h1 class="font-weight-bold text-center " style="color: white;">Nosotros</h1>
            </div>
        </div>
      <hr class="style-two">
      <div class="container">

        {{--  ////////////////  --}}
        <div class="row">
            <div class="col-md-4 mr-auto">
            <h2>Sobre nosotros</h2>
            <p class="mb-1">

                Vivimos en un tiempo en que, comenzamos a priorizar nuestra salud, en todos los aspectos, y nuestra apariencia, pasó a ser la ventana pro la cual mostramos qué tan bien nos sentimos con nosotros mismos.
                Es de ahí que nace Unic, con profesionales altamente capacitados, espacios exclusivos para cada paciente, con productos y equipamientos a la vanguardia, para brindarte así un servicio ÚNICO, y convertir de tu visita, en una verdadera experiencia.

            </p>
            <p class="">
                Te invitamos a conocer nuestras instalaciones, respetando las medidas sanitarias, y garantizar así la seguridad de todos y cada uno de ustedes.
                Bienvenidos!!
            </p>
            <ul class="list-unstyled pl-md-5 mb-5">
            {{--  <li class="d-flex text-black mb-2">
            <span class="mr-3"><i class="fas fa-map-marked-alt"></i></span> 34 Street Name, City Name Here, <br> United States
            </li>  --}}
            <li class="d-flex text-black mb-1">
                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=595985639999&text=Hola!%20=D,%20les%20escribo%20desde%20el%20sitio%20web,%20tengo%20una%20consulta." target="_blank" class="nosotros-btn"> <img src="/sitio/public_html/images/whatsapp.png" alt="whatsapp"> Consultas/Reservas</a>

            </li>
            <li class="d-flex text-black">
                <span class="mr-3">

                    atencion@unicspa.com
                </span>

            </li>
            </ul>
            </div>
            <div class="col-md-8">

                {{--  <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=-25.509119871533006,%20-54.61087810000001&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>  --}}

                    {{--  <img class="lightbox" width="600" height="500"  src="images/nosotros/01.jpg">
                      --}}


                </img>

                {{--  //////////////////////////  --}}
                <div class="container gallery-container">


                    <div class="tz-gallery">

                        <div class="row">

                            <div class="col-sm-12 col-md-6 p-1">
                                <a class="lightbox" href="/images/nosotros/01.jpg">
                                    <img src="/images/nosotros/01.jpg" alt="Bridge">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 p-1">
                                <a class="lightbox" href="/images/nosotros/03.jpg">
                                    <img src="/images/nosotros/03.jpg" alt="Bridge">
                                </a>
                            </div>
                            {{--  <div class="col-sm-12 col-md-6 p-1">
                                <a class="lightbox" href="/images/nosotros/05.jpg">
                                    <img src="/images/nosotros/05.jpg" alt="Bridge">
                                </a>
                            </div>  --}}
                            <div class="col-sm-6 col-md-6 p-1">
                                <a class="lightbox" href="/images/nosotros/02.jpg">
                                    <img src="/images/nosotros/02.jpg" alt="Bridge">
                                </a>
                            </div>

                            <div class="col-sm-6 col-md-6 p-1">
                                <a class="lightbox" href="/images/nosotros/04.jpg">
                                    <img src="/images/nosotros/04.jpg" alt="Bridge">
                                </a>
                            </div>



                        </div>

                    </div>

                </div>

                {{--  //////////////////////////  --}}

                </div>
            </div>

            </div>
            </div>

        {{--  ////////////////  --}}





      </div>
      <hr class="style-two">
      <div aria-label="Page navigation example ">
        <div class="pagination justify-content-center">


        </div>
      </div>
    </div>
</section>

@endsection

