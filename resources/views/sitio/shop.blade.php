@extends('layouts.app')

@section('content')

 <!-- ::::::  Start Hero Section  ::::::  -->
   
    @include('sitio.partials.slider-principal')
 <!-- ::::::  End Hero Section  ::::::  -->

 <!-- ::::::  Start banner Section  ::::::  -->
 @include('sitio.partials.banner_01')
 <!-- ::::::  end banner Section  ::::::  -->
 <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
 @include('sitio.partials.product_01')
 <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
  <!-- ::::::  Start banner Section  ::::::  -->
  @include('sitio.partials.banner_02')
  <!-- ::::::  end banner Section  ::::::  -->
   <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
 @include('sitio.partials.product_02')
 <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
   <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
 @include('sitio.partials.product_03')
 <!-- ::::::  End Product-Style - Counter Section  ::::::  -->
 @include('sitio.partials.toast')




@endsection

{{-- @section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Productos</h4>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; height: auto;">
                                
                                
                            

                                @if ($pro->productoImagen->count())

                                    @foreach ($pro->productoImagen as  $imagen)
                                    <img src=" {{ $imagen->path_image }}"  class="card-img-top mx-auto"
                                    style="height: 150px; width: 150px;display: block;">
                                   
                               
                                    @endforeach

                                @else
                                    <img src="/imagenes/img_alt.png"  style="width: 80px"></td>

                                @endif
                                <div class="card-body">
                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p>${{ $pro->precio }}</p>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->precio }}" id="precio" name="precio">

                                        @foreach ($pro->productoImagen as  $imagen)
                                     
                                        <input type="hidden" value="{{ $imagen->path_image }}" id="img" name="img">
                                        @endforeach

                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                              <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection --}}


