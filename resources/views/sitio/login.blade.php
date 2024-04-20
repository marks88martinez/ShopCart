@extends('layouts.app')

@section('content')

<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Home</a></li>
                    <li class="page-breadcrumb__nav active">Login Page</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
           <div class="col-12">
            <!-- login area start -->
            <div class="login-register-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4>login</h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2">
                                        <h4>register</h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf

                                                    <div class="form-box__single-group">
                                                        {{-- <input type="text" id="form-username" placeholder="Username"> --}}
                                                        <input id="email" type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <div class="form-box__single-group">
                                                        {{-- <input type="password" id="form-username-password" placeholder="Enter password"> --}}
                                                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                                        <label for="account-remember">
                                                            <input type="checkbox" name="account-remember" id="account-remember">
                                                            <span>Remember me</span>
                                                        </label>
                                                        <a class="link--gray" href="">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight">
                                                        {{ __('Login') }}
                                                    </button>
                                                    {{-- <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">LOGIN</button> --}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                               {{-- ///////////////////////////////////// --}}
                                               <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="section-content">
                                                        <h5 class="section-content__title">Registro de Usuario</h5>
                                                    </div>
                                                    <form method = "POST" action= "/client/users">
                                                        {{method_field('post')}}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-first-name">Nombre</label>
                                                                    {{-- <input type="text" id="form-first-name"> --}}
                                                                    <input type="text" class="form-control" name="name"    required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-last-name">Apellido</label>
                                                                    <input type="text" class="form-control" name="last_name"     required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-company-name">Empresa</label>
                                                                    <input type="text" class="form-control" name="company" >

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-country">* País</label>
                                                                    <input type="text" class="form-control" name="country" >

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-address-1">Dirección</label>
                                                                    <input type="text" class="form-control" name="address" >
                                                                    {{-- <input type="text" class="m-t-10" id="form-address-2" placeholder="Apartment, suite, unit etc."> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-state">* Región / Estado</label>
                                                                    <input type="text" class="form-control" name="state" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-zipcode">* Código Postal/Código Postal</label>
                                                                    <input type="text" class="form-control" name="postal_code" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-phone">
                                                                        Teléfono</label>
                                                                        <input type="text" class="form-control" name="phone" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-email">Email </label>
                                                                    <input type="email" id="form-email" name="email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-email">Password </label>
                                                                    <input type="password" id="form-email" name="password" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="m-tb-20">
                                                                    
                                                                    <input type="hidden" name="tipoUser" value="client">
                                                                </div>
                                                            </div>
                                                          
                                                            <button type="submit" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight">
                                                                {{ __('Register') }}
                                                            </button>
                                                           
                                                            <!-- End Another Shipping Address -->
                                                        </div>
                                                    </form> 
                                                </div> 
                                               </div>
                                               {{-- ///////////////////////////////////// --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login area end -->
           </div>
        </div>
    </div>
</main> 
<!-- ::::::  End  Main Container Section  ::::::  -->




    <br><br>
@endsection
