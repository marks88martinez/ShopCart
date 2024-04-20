@extends('cliente.headerfooter.headerfooter')
@section('content')



{{-- Trabajos realizados
========================= --}}

<section class="thumb-section" style="margin-top: 3rem;">
    <div class="container">
        <div class="row" style="background: #e5b7b2; ">
            <div class="col-12 d-flex justify-content-center align-items-center my-5" >
              <h1 class="font-weight-bold text-center " style="color: white;">Contactos</h1>
            </div>
        </div>
      <hr class="style-two">
      <div class="container">


        {{--  ////////////////  --}}
        <div class="row">
            <div class="col-md-5 mr-auto">
            <h2>Contacto</h2>
            <p class="mb-5">
                Somos una empresa comprometida y abocada a satisfacer plenamente los requerimientos de nuestros clientes, respetando gustos y estilos que los identifique y los haga sentir cómodos, por tal motivo cada área orientará sus esfuerzos a mantener y mejorar continuamente la calidad de nuestros productos, optimizar los procesos de fabricación para lograr la entrega en tiempo y forma, con el fin de cumplir a cabalidad con las necesidades, expectativas e intereses de todos nuestros clientes.
            </p>
            <ul class="list-unstyled pl-md-5 mb-5">
            {{--  <li class="d-flex text-black mb-2">
            <span class="mr-3"><i class="fas fa-map-marked-alt"></i></span> 34 Street Name, City Name Here, <br> United States
            </li>  --}}
            <li class="d-flex text-black"><span class="mr-3"></span>
                Calle Pampliega - Shopping Mirage - Centro - CDE
            </li>
            <li class="d-flex text-black mb-1">
                <a href="#" target="_blank" class="nosotros-btn" >  Queremos saber tu opinión</a>

            </li>
            </ul>
            </div>
            <div class="col-md-6">

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=-25.510250141056595,-54.6135648651589&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>


            </div>
            </div>

        {{--  ////////////////  --}}
        {{--  -25.510250141056595, -54.6135648651589  --}}




      </div>
      <hr class="style-two">
      <div aria-label="Page navigation example ">
        <div class="pagination justify-content-center">


        </div>
      </div>
    </div>
</section>

@endsection

