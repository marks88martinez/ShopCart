@extends('layouts.dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">orders</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          {{-- <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <a href="/admin/orders/create" type="button" class="btn btn bg-gradient-primary btn-sm float-right p-2 m-2"><i class="fa fa-order"></i>  New order</a>
           </li>

          </ol> --}}
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
{{-- //////////////////// --}}
<section class="content">
    <div class="container-fluid">


      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> orders </h3>

              <div class="card-tools">
                <form action="/admin/productos" method="GET">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                      </button>
                  </div>
                  </div>
              </form>

            </div>

            <div class="card-tools">

                <div class="input-group input-group-sm" style="width: 150px;">
                  {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> --}}

                  <div class="input-group-append">
                    {{-- <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" >
            {{-- ////////////////////////////////////////////////// --}}
            <table class="table table-hover">
              <thead>
                  <tr class="table-active">
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Total Amount</th>
                      <th>Date</th>
                      <th>#</th>
                  </tr>
              </thead>
              @foreach ( $orders as $order )
              <tbody>
                  <tr data-widget="expandable-table" aria-expanded="false">
                      <td>
                          <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                          {{ $order->id }}
                      </td>
                      <td>{{ $order->user->name }}</td>
                      <td>{{ $order->user->email }}</td>
                      <td>{{ $order->user->phone }}</td>
                      <td>{{ $order->total_amount }}</td>
                      <td>{{ $order->created_at }}</td>
                      
                      <td>
                      @if ($order->status == 0)
                        <form action="{{ route('admin.order.updateStatus', ['id' => $order->id]) }}" method="POST">
                          @csrf
                          @method('PATCH')
                          <button type="submit" class="btn btn-block btn-outline-primary btn-sm"><i class="fa fa-bell"></i></button>
                      </form>
                      @else
                      <button type="submit" class="btn btn-block btn-outline-success btn-sm"><i class="fa fa-check"></i></button>
                      @endif
                 
                     
                      </td>
                  </tr>
                  <tr class="expandable-body d-none">
                      <td colspan="6">
                          <div class="p-0" style="display: none;">
                              <table class="table table-hover ">
                                <thead>
                                  <tr class="table-active">
                                      <th>ID</th>
                                      <th>SKU</th>
                                      <th>Producto</th>
                                      <th>Qty</th>
                                      <th>precio</th>
                                     
                                  </tr>
                              </thead>
                                  <tbody>
                                    @foreach ($order->orderProducts as $item)
                              
                                      <tr data-widget="expandable-table" aria-expanded="false">
                                          <td>
                                            {{ $item->id}}
                                          </td>
                                          <td>{{ $item->sku}}</td>
                                          <td>{{ $item->product_name}}</td>
                                          <td>{{ $item->quantity}}</td>
                                          <td>{{ $item->price}}</td>
                                         
                                      </tr>
                                  
                                      @endforeach
                                      <tr>
                                        <td colspan="4">Total</td>
                                        <td>${{ $order->total_amount }}</td>
                                      </tr>
                                      <!-- Agrega más filas expandibles si es necesario -->
                                  </tbody>
                              </table>
                          </div>
                      </td>
                  </tr>
                  <!-- Agrega más filas si es necesario -->
              </tbody>
              @endforeach
          </table>
            {{-- ////////////////////////////////////////////////// --}}
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <div class="pagination pagination-sm m-0 float-right">
                  {{ $orders->Links() }}

              </div>
            </div>

          </div>
          <!-- /.card -->
        </div>
      </div>

      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>




@endsection
