@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity()>0)
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>
                @else
                    <h4>No hay productos en su carrito</h4><br>
                    <a href="/" class="btn btn--block btn--small btn-success btn--uppercase btn--weight">Continue en la tienda</a>
                @endif

                @foreach($cartCollection as $item)
                    <div class="row">
                        <div class="col-lg-3">
                        
                            <img src="{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">

                           
                        
                        </div>
                        <div class="col-lg-5">
                            <p>
                                <b><a href="/detail/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                                <b>Precio: </b>${{ $item->price }}<br>
                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                                {{--                                <b>With Discount: </b>${{ \Cart::get($item->id)->getPriceSumWithConditions() }}--}}
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        
                                        <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}"
                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>
                                    </div>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
                @if(count($cartCollection)>0)
                    <form action="{{ route('cart.clear') }}" method="POST">
                        {{ csrf_field() }}
                        <button class="btn btn-danger btn-md">Borrar Carrito</button> 
                    </form>
                @endif
            </div>
            @if(count($cartCollection)>0)
                <div class="col-lg-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                        </ul>
                    </div>
                    <br>
                    <a href="/" class="btn btn--block btn--small btn--blue btn--uppercase btn--weight ">Continue en la tienda</a>
                    <br>
                    @auth
                        {{-- ///////////////////////////////////// --}}
                        <button id="finalizarBtn" class="btn btn--block btn--small btn-success btn--uppercase btn--weight">
                            <i class="icon-shopping-cart"></i> Finalizar Pedido ajax
                        </button>
                        
                        <button id="loadingBtn" class="btn btn--block btn--small btn-success btn--uppercase btn--weight" type="button" style="display:none;" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </button>                        
                        {{-- ///////////////////////////////////// --}}
                        {{-- <a class="btn btn--block btn--small btn-success btn--uppercase btn--weight" href="{{ route('enviarCorreo') }}" > <i class="icon-shopping-cart"></i> Finalizar Pedido</a> --}}
                    @endauth
                    @guest
                        <a class="btn btn--block btn--small btn-warning btn--uppercase btn--weight" href="{{ route('client.login') }}" >Login</a>
                    @endguest

                    {{-- <a href="/checkout" class="btn btn-success">PROCEDER AL CHECKOUT</a> --}}
                </div>
            @endif
        </div>
        <br><br>
    </div>

    
   
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#finalizarBtn').click(function() {
                // Ocultar el botón de finalizar y mostrar el botón de carga
                $('#finalizarBtn').hide();
                $('#loadingBtn').show();

                // Realizar la solicitud POST al servidor
                $.get('/enviarCorreo', function(response) {
                    // Mostrar el botón de finalizar y ocultar el botón de carga después de completar la solicitud
                    $('#finalizarBtn').show();
                    $('#loadingBtn').hide();

                    if (response.success) {
                        // Mostrar el popup de SweetAlert
                        Swal.fire({
                            title: 'Proceso finalizado',
                            text: '¡En breve se comunicará un representante con usted!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redireccionar al usuario a la página principal
                                window.location.href = '/';
                            }
                        });
                    } else {
                        // Manejar cualquier error que pueda ocurrir
                        Swal.fire({
                            title: 'Error',
                            text: 'Ha ocurrido un error durante el proceso.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });


    </script>
    
  
@endsection
