@extends('cliente.headerfooter.headerfooter')
@section('content')








{{--  //////////////////////////////  --}}
<section class="product-presentation" style="margin-top: 3rem;">
    <div class="container ">
        {{--  <div class="row" style="background: #e5b7b2; ">
            <div class="col-12 d-flex justify-content-center align-items-center my-5" >
              <h1 class="font-weight-bold text-center" style="color: white;">{{ $producto->name }}</h1>
            </div>
        </div>  --}}




    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach ($producto->productoImagenes as $index => $prodImag )
        <li data-target="#myCarousel" data-slide-to="{{$index}}" class="{{ $index == 0 ? 'active' : '' }}"></li>
        @endforeach

      </ol>
      <div class="carousel-inner">
        @foreach ($producto->productoImagenes as $index => $prodImag )

        <div class="carousel-item  {{ $index == 0 ? 'active' : '' }} ">
            <img src="{{ $prodImag->path_image }}" />
        </div>
        @endforeach

      </div>
      <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
    {{--  //////////////////////////////  --}}

      <div class="container">
        <h1 class="mt-5">{{ $producto->name }}</h1>
        <p class="lead">  {!! $producto->description !!}</p>
      </div>


    </div>
</section>
{{--  //////////////////////////////  --}}


{{-- Trabajos realizados
========================= --}}
<section class="thumb-section">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center my-5">
          <h1 class="font-weight-bold text-center">Trabajos que te pueden interesar</h1>
        </div>
      </div>
      <div class="row">
      @foreach ( $productos as $producto)
        <div class="col-6 col-md-3">
          <div class="thumb-container">
            <a href="/show/{{ $producto->slug }}">
              <div class="thumb-img">
                @if ($producto->productoImagen->count())
                    @foreach ($producto->productoImagen as  $imagen)
                    <img src=" {{ $imagen->path_image }}"  style="width: 250px">
                    @endforeach
                @else
                    <img src="/imagenes/img_alt.png"  style="width: 250px"></td>
                @endif
                  {{--  <img src="{{ asset('images/guardaropa.png') }}" alt="thumb">  --}}
              </div>
              <div class="thumb-description">
                <h3>{{ $producto->name }}</h3>
                {{-- <button>Consultar Precio</button> --}}
              </div>
            </a>
          </div>
        </div>
      @endforeach

      </div>
    </div>
</section>

<style>
    a:hover{
        text-decoration: none !important;
    }
</style>





@endsection
