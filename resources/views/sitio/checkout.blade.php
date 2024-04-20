@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout Ventas</li>
            </ol>
        </nav>
     
    </div>

    <div class="container">
        <div class="row">
            <!-- Start Client Shipping Address -->
            <div class="col-lg-7">
                <div class="section-content">
                    <h5 class="section-content__title">Detalles de facturación</h5>
                </div>
                <form action="#" method="post" class="form-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-first-name">Nombre</label>
                                <input type="text" id="form-first-name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-last-name">Apellido</label>
                                <input type="text" id="form-last-name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <label for="form-company-name">Empresa</label>
                                <input type="text" id="form-company-name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <label for="form-country">* País</label>
                                <select id="form-country">
                                    <option value="select-country" selected>Selecciona País</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box__single-group">
                                <label for="form-address-1">Dirección</label>
                                <input type="text" id="form-address-1" placeholder="House number and street name">
                                {{-- <input type="text" class="m-t-10" id="form-address-2" placeholder="Apartment, suite, unit etc."> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-state">* Región / Estado</label>
                                <select id="form-state">
                                    {{-- @foreach($paises as $id => $nombre)
                                        <option value="{{ $id }}">{{ $nombre }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-zipcode">* Código Postal/Código Postal</label>
                                <input type="text" id="form-zipcode">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-phone">
                                    Teléfono</label>
                                <input type="text" id="form-phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box__single-group">
                                <label for="form-email">Email </label>
                                <input type="email" id="form-email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="m-tb-20">
                                <label for="check-account">
                                    <input type="checkbox" name="check-account" class="creat-account"  id="check-account">
                                    <span>Crea una cuenta?</span>
                                </label>
                                <div class="toogle-form open-create-account">
                                    <div class="form-box__single-group">
                                        <label for="form-email-new-account">Email </label>
                                        <input type="email" id="form-email-new-account">
                                    </div>
                                    <div class="form-box__single-group">
                                        <label for="form-password-new-account">Password</label>
                                        <input type="password" id="form-password-new-account">
                                    </div>
                                    <div class="from-box__buttons m-t-25">
                                        <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">REGISTRAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="form-box__single-group">
                                <h6>Additional information</h6>
                                <label for="form-additional-info">Order notes</label>
                                <textarea  id="form-additional-info" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div> --}}
                        <!-- Add Another Shipping Address -->
                        {{-- <div class="col-md-12">
                            <div class="m-tb-20">
                                <label for="shipping-account">
                                    <input type="checkbox" name="check-account" class="shipping-account"  id="shipping-account">
                                    <span>Ship to a different address?</span>
                                </label>
                                <div class="toogle-form open-shipping-account">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-first-name">First Name</label>
                                                <input type="text" id="shipping-form-first-name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-last-name">Last Name</label>
                                                <input type="text" id="shipping-form-last-name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-company-name">Company Name</label>
                                                <input type="text" id="shipping-form-company-name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-country">* Country</label>
                                                <select id="shipping-form-country">
                                                    <option value="select-country" selected>Select a country</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="US">USA</option>
                                                    <option value="UK">UK</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="CA">Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-address-1">Street Address</label>
                                                <input type="text" id="shipping-form-address-1" placeholder="House number and street name">
                                                <input type="text" class="m-t-10" id="shipping-form-address-2" placeholder="Apartment, suite, unit etc.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-state">* Region / State</label>
                                                <select id="shipping-form-state">
                                                    <option value="Dha" selected>Dhaka</option>
                                                    <option value="Kha">Khulna</option>
                                                    <option value="Raj">Rajshahi</option>
                                                    <option value="Syl">Sylet</option>
                                                    <option value="Chi">Chittagong</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-zipcode">* Zip/Postal Code</label>
                                                <input type="text" id="shipping-form-zipcode">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-phone">Phone</label>
                                                <input type="text" id="shipping-form-phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-box__single-group">
                                                <label for="shipping-form-email">Email Address</label>
                                                <input type="email" id="shipping-form-email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   --}}
                        <!-- End Another Shipping Address -->
                    </div>
                </form> 
            </div> <!-- End Client Shipping Address -->
            
            <!-- Start Order Wrapper -->
            <div class="col-lg-5">
                <div class="your-order-section">
                    <div class="section-content">
                        <h5 class="section-content__title">Orden</h5>
                    </div>
                    <div class="your-order-box gray-bg m-t-40 m-b-30">
                        <div class="your-order-product-info">
                            <div class="your-order-top d-flex justify-content-between">
                                <h6 class="your-order-top-left">Producto</h6>
                                <h6 class="your-order-top-right">Total</h6>
                            </div>
                            <ul >
                                @foreach($cartCollection as $item)
                                    <li class="d-flex justify-content-between">
                                        <span class="your-order-middle-left">{{$item->name}} X {{ $item->quantity }}</span>
                                        <span class="your-order-middle-right">${{ \Cart::get($item->id)->getPriceSum() }}</span>
                                    </li>
                                @endforeach
                                
                            </ul>
                            {{-- <div class="your-order-bottom d-flex justify-content-between">
                                <h6 class="your-order-bottom-left">Shipping</h6>
                                <span class="your-order-bottom-right">Free shipping</span>
                            </div> --}}
                            <div class="your-order-total d-flex justify-content-between">
                                <h5 class="your-order-total-left">Total</h5>
                                <h5 class="your-order-total-right">$ {{ \Cart::getTotal() }}</h5>
                            </div>

                            {{-- <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#method1" aria-expanded="false" class="collapsed">
                                                        Direct bank transfer
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method2" aria-expanded="false">
                                                        Check payments
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse" >
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-three">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method3" aria-expanded="false">
                                                        Cash on delivery
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    {{-- <button class="btn btn--block btn--small btn--blue btn--uppercase btn--weight" type="submit">Enviar</button> --}}
                    <br>
                    @auth
                        <a class="btn btn--block btn--small btn--blue btn--uppercase btn--weight" href="{{ route('enviarCorreo') }}" >Finalizar Compra</a>
                    @endauth
                    @guest
                    <a class="btn btn--block btn--small btn-success btn--uppercase btn--weight" href="{{ route('client.login') }}" >Login</a>
                    @endguest
                </div>
            </div> <!-- End Order Wrapper -->
        </div>
    </div>



    <br><br>
@endsection
