@extends('layouts.dashboard')


@section('content')




<div class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Productos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <a href="/admin/productos/create" type="button" class="btn btn bg-gradient-primary btn-sm float-right p-2 m-2"><i class="nav-icon far fa-image"></i>  New Productos</a>
           </li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
{{-- //////////////////// --}}
<section class="content">





    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" id="cambio">Productos</h3>

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
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" >
              <table class="table table-head-fixed text-nowrap" >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    
                    <th>Precio</th>
                    <th>Precio_oferta</th>
                    <th>SKU</th>
                    <th>Destacado</th>
                    <th>Status</th>
                    <th>Date</th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ( $productos as $producto )
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>
                          {!! Str::limit($producto->name, 20) !!}
                        </td>

                        <td>
                          @foreach ($producto->categorias as $cats)
                          {{$cats->name}}
                            
                          @endforeach
                        </td>
                       
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->precio_oferta }}</td>
                        <td>{{ $producto->sku }}</td>
                        <td>
                          @if($producto->destacado == 'Active')
                          <span class="badge bg-success">{{$producto->destacado }}</span>
                          @else
                              <span class="badge bg-danger">{{$producto->destacado }}</span>
                          @endif
                        </td>
                        <td>
                          @if($producto->status == 'Active')
                          <span class="badge bg-success">{{$producto->status }}</span>
                          @else
                              <span class="badge bg-danger">{{$producto->status }}</span>
                          @endif
                        </td>
                        <td>{{ $producto->created_at }}</td>






                        <td>
                            @if ($producto->productoImagen->count())

                                @foreach ($producto->productoImagen as  $imagen)


                                   <img src=" {{ $imagen->path_image }}"  style="width: 80px">

                                @endforeach

                            @else
                                <img src="/imagenes/img_alt.png"  style="width: 80px"></td>

                            @endif

                        </td>


                        <td>
                            <a href="/admin/productos/{{ $producto->id }}/edit" class="btn btn bg-gradient-warning btn-sm"> <i class="fa fa-bell"></i>Edit</a>
                            <form action="/admin/productos/{{  $producto->id }}" method="POST" style="display: inline">

                                @csrf
                                @method('DELETE')


                              <button class="btn btn bg-gradient-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>

                    @endforeach
                </tbody>

              </table>
            </div>
            <div class="card-footer clearfix">
                <div class="pagination pagination-sm m-0 float-right">
                    {{ $productos->Links() }}

                </div>
              </div>

            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>



  </section>






@endsection
@section('scripts')





@stop
