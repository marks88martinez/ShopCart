@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Ordenes</li>
            </ol>
        </nav>
     
    </div>

    {{-- ///////////////////////////////////// --}}
      <!-- ::::::  Start  Main Container Section  ::::::  -->
      <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- :::::::::: Start My Account Section :::::::::: -->
                    <div class="my-account-area">
                        <div class="row">
                          
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
                                                            <th class="name">sku</th>
                                                            <th class="date">Nombre</th>
                                                            <th class="status">cantidad</th>
                                                            <th class="status">precio</th>
                                                            <th class="status">total</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order_products as $index => $product)
                                                            <tr>
                                                                <td>{{$index + 1}}</td>
                                                                <td>{{$product->sku}}</td>
                                                                <td>{{$product->product_name}}</td>
                                                                <td>{{$product->quantity}}</td>
                                                                <td>$ {{$product->price}}</td>
                                                                <td>$ {{$product->quantity *  $product->price}}</td>
                                                            </tr>
                                                        @endforeach
                                                            <tr>
                                                                <td class="text-left" colspan="5">total</td>
                                                             
                                                                <td>{{$order->total_amount}}</td>
                                                            </tr>
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
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
