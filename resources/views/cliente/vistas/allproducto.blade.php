@extends('cliente.headerfooter.headerfooter')
@section('content')



{{-- Trabajos realizados
========================= --}}

<section class="thumb-section" style="margin-top: 3rem;">
    <div class="container" >
      <div class="row" style="background: #e5b7b2; ">
        <div class="col-12 d-flex justify-content-center align-items-center my-5" >
          <h1 class="font-weight-bold text-center " style="color: white;">Tratamientos</h1>
        </div>
    </div>


    <div class="col-12 d-flex justify-content-center align-items-center scroll-x ">
        <div class="btn-group mx-auto scroll-x " role="group" aria-label="Basic example">
            @foreach ($categorias as $categoria )
            <a href="/categoria_prod/{{ $categoria->id  }}"class="btn btn-light p-4 ">{{ $categoria->name }}</a>
            @endforeach
            <a href="/tratamientos"class="btn btn-light p-4 active">Todos</a>

        </div>
    </div>





    </div>
</section>
<br>



{{--  //////////////////////  --}}

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach ( $productos as $producto)

        <div class="col-md-4 animate__animated animate__pulse">
            <a href="/show/{{ $producto->slug }}">
            <div class="card mb-4 shadow-sm ">
              <div class="img-wrap">
                  @if ($producto->productoImagen->count())
                      @foreach ($producto->productoImagen as  $imagen)
                      <img src=" {{ $imagen->path_image }}"  class="">
                      @endforeach
                  @else
                      <img src="imagenes/img_alt.png"  ></td>
                  @endif
              </div>

            <div class="card-body">
              <p class="card-text text-center tr-ing-title">
               {{ $producto->name }}
              </p>
              {{--  <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>  --}}
            </div>
          </div>
        </a>
        </div>

        @endforeach

      </div>

    </div>

        <div aria-label="Page navigation example ">
        <div class="pagination justify-content-center">
            {{ @$productos->links() }}
        </div>
        </div>
  </div>
  </div>
{{--  //////////////////////  --}}


<style>
    .btn-light {
        color: #aa8581;
        background-color: #fff6f5;
        border-color: #fff6f5;
    }
    .btn-light:hover {
        color: #ffffff;
        background-color: #e5b7b2;
        border-color: #e5b7b2;
        e5: ;
    }
    .nosotros-img{
        width: 90%;
        max-width: 450px;
        height: auto;
        /* border: 3px solid var(--main-color); */
        //box-shadow: 0px 0px 30px var(--main-color);
        border-radius: 15px;
        overflow: hidden;
        //transition: all .4s linear;
    }
    .bg-light {
        background-color: #fff6f5!important;
    }
    .img-wrap{
        width: 100%;
        height: 150px;
        overflow: hidden;
        border-radius: 7px
    }
    .img-wrap img{
        transform: scale(1.1);
        transition: all .4s linear;
    }
    .img-wrap img:hover{
        transform: scale(1.3);
    }
    .tr-ing-title{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none !important;
    }
    .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show>.btn-light.dropdown-toggle {
        color: #ffffff;
        background-color: #e5b7b2;
        border-color: #e5b7b2;
    }
</style>

@endsection
