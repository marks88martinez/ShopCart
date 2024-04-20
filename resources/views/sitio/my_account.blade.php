@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Mi Cuenta</li>
            </ol>
        </nav>
     
        {{-- ///////////////////////////////////// --}}
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
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
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif

        {{-- ///////////////////////////////////// --}}
    </div>



    {{-- ///////////////////////////////////// --}}


    {{-- ///////////////////////////////////// --}}
      <!-- ::::::  Start  Main Container Section  ::::::  -->
      <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- :::::::::: Start My Account Section :::::::::: -->
                    <div class="my-account-area">
                        <div class="row">
                            <div class="col-xl-3 col-md-4">
                                <div class="my-account-menu">
                                    <ul class="nav account-menu-list flex-column nav-pills" id="pills-tab" role="tablist">
                                        {{-- <li>
                                            <a class="active link--icon-left" id="pills-dashboard-tab" data-toggle="pill" href="#pills-dashboard"
                                                role="tab" aria-controls="pills-dashboard" aria-selected="true"><i
                                                    class="fas fa-tachometer-alt"></i> Dashboard</a>
                                        </li> --}}
                                        <li>
                                            <a id="pills-order-tab" class=" active link--icon-left" data-toggle="pill" href="#pills-order" role="tab"
                                                aria-controls="pills-order" aria-selected="false"><i
                                                    class="fas fa-shopping-cart"></i> Order</a>
                                        </li>
                                        {{-- <li>
                                            <a id="pills-download-tab" class="link--icon-left" data-toggle="pill" href="#pills-download" role="tab"
                                                aria-controls="pills-download" aria-selected="false"><i
                                                    class="fas fa-cloud-download-alt"></i> Download</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a id="pills-payment-tab" class="link--icon-left" data-toggle="pill" href="#pills-payment" role="tab"
                                                aria-controls="pills-payment" aria-selected="false"><i
                                                    class="fas fa-credit-card"></i> Payment Method</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a id="pills-address-tab" class="link--icon-left" data-toggle="pill" href="#pills-address" role="tab"
                                                aria-controls="pills-address" aria-selected="false"><i
                                                    class="fas fa-map-marker-alt"></i> Address</a>
                                        </li> --}}
                                        <li>
                                            <a id="pills-account-tab" class="link--icon-left" data-toggle="pill" href="#pills-account" role="tab"
                                                aria-controls="pills-account" aria-selected="false"><i class="fas fa-user"></i>
                                                Usuarios</a>
                                        </li>
                                        {{-- <li>
                                            <a class="link--icon-left" href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-8">
                                <div class="tab-content my-account-tab" id="pills-tabContent">
                                    <div class="tab-pane fade  " id="pills-dashboard" role="tabpanel"
                                        aria-labelledby="pills-dashboard-tab">
                                        <div class="my-account-dashboard account-wrapper">
                                            <h4 class="account-title">Dashboard</h4>
                                            <div class="welcome-dashboard m-t-30">
                                                <p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong> <a
                                                        href="#">Logout</a> )</p>
                                            </div>
                                            <p class="m-t-25">From your account dashboard. you can easily check &amp; view your
                                                recent orders, manage your shipping and billing addresses and edit your password and
                                                account details.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-order" role="tabpanel" aria-labelledby="pills-order-tab">
                                        <div class="my-account-order account-wrapper">
                                            <h4 class="account-title">Orders</h4>
                                            <div class="account-table text-center m-t-30 table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="no">No</th>
                                                            <th class="name">Valor</th>
                                                            <th class="date">Fecha</th>
                                                            <th class="status">#</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $index => $order)
                                                            <tr>
                                                                <td>{{$index + 1}}</td>
                                                                <td>$ {{$order->total_amount}}</td>
                                                                <td>{{$order->created_at}}</td>

                                                                <td>
                                                                    
                                                                    <a  href="{{ route('client.order_products', ['id' => $order->id]) }}" class="btn btn-primary"> <i class="icon-shopping-cart"></i> Productos de la orden {{ $index + 1 }}</a>
                                                                </td>
                                                                
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-download" role="tabpanel"
                                        aria-labelledby="pills-download-tab">
                                        <div class="my-account-download account-wrapper">
                                            <h4 class="account-title">Download</h4>
                                            <div class="account-table text-center m-t-30 table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="name">Product</th>
                                                            <th class="date">Date</th>
                                                            <th class="status">Expire</th>
                                                            <th class="action">Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2020</td>
                                                            <td>Yes</td>
                                                            <td><a href="#">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katopeno Altuni</td>
                                                            <td>July 22, 2020</td>
                                                            <td>Never</td>
                                                            <td><a href="#">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                                        aria-labelledby="pills-payment-tab">
                                        <div class="my-account-payment account-wrapper">
                                            <h4 class="account-title">Payment Method</h4>
                                            <p class="m-t-30">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-address" role="tabpanel"
                                        aria-labelledby="pills-address-tab">
                                        <div class="my-account-address account-wrapper">
                                            <h4 class="account-title">Payment Method</h4>
                                            <div class="account-address m-t-30">
                                                <h6 class="name">Alex Tuntuni</h6>
                                                <p>1355 Market St, Suite 900 <br> San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                                <a class="box-btn m-t-25 " href="#"><i class="far fa-edit"></i> Edit Address</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-account" role="tabpanel"
                                        aria-labelledby="pills-account-tab">
                                        <div class="my-account-details account-wrapper">
                                            

                                         
                                            {{-- ////////////////////////////////////////////// --}}

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="section-content">
                                                        
                                                        <h4 class="account-title"> Usuarios</h4>
                                                    </div>
                                                 
                                                    <form method = "POST" action= "/client/update/{{ Auth::id() }}">
                                                        {{method_field('put')}}
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-first-name">Nombre</label>
                                                                    {{-- <input type="text" id="form-first-name"> --}}
                                                                    <input type="text" class="form-control" name="name"  value="{{ isset($user) ? $user->name : '' }}"   required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-last-name">Apellido</label>
                                                                    <input type="text" class="form-control" name="last_name"   value="{{ isset($user) ? $user->last_name : '' }}"  required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-company-name">Empresa</label>
                                                                    <input type="text" class="form-control" name="company" value="{{ isset($user) ? $user->company : '' }}">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-country">* País</label>
                                                                    <input type="text" class="form-control" name="country" value="{{ isset($user) ? $user->country : '' }}" >

                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-address-1">Dirección</label>
                                                                    <input type="text" class="form-control" name="address" value="{{ isset($user) ? $user->address : '' }}" >
                                                                    {{-- <input type="text" class="m-t-10" id="form-address-2" placeholder="Apartment, suite, unit etc."> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-state">* Región / Estado</label>
                                                                    <input type="text" class="form-control" name="state" value="{{ isset($user) ? $user->state : '' }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-zipcode">* Código Postal/Código Postal</label>
                                                                    <input type="text" class="form-control" name="postal_code" value="{{ isset($user) ? $user->postal_code : '' }}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-phone">
                                                                        Teléfono</label>
                                                                        <input type="text" class="form-control" name="phone" value="{{ isset($user) ? $user->phone : '' }}" >
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-email">Email </label>
                                                                    <input type="email" id="form-email" name="email" value="{{ isset($user) ? $user->email : '' }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-box__single-group">
                                                                    <label for="form-email">Password </label>
                                                                    <input type="password" id="form-email" name="password" value="" >
                                                                </div>
                                                            </div>
                                                           
                                                          <br>
                                                            
                                                           
                                                            <!-- End Another Shipping Address -->
                                                        </div>
                                                        <br>
                                                        <button type="submit" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </form> 
                                                </div> 
                                               </div>
                                            {{-- ////////////////////////////////////////////// --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- :::::::::: End My Account Section :::::::::: -->
                </div>
            </div>
        </div>
    </main> 
    <!-- ::::::  End  Main Container Section  ::::::  -->
    {{-- ///////////////////////////////////// --}}

    <br>


@endsection
