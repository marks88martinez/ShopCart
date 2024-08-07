@extends('layouts.dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> productos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
            <a href="/admin/productos/create" type="button" class="btn btn bg-gradient-primary btn-sm float-right p-2 m-2"><i class="fa fa-user"></i>  New producto</a>
           </li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
{{-- //////////////////// --}}
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create producto</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <!-- <form  name="form-example-1" id="form-example-1" method = "POST"enctype="multipart/form-data" > -->
            <form method="POST" name="form-example-1" id="form-example-1"  action= "{{ route('admin.productos.store') }}"  enctype="multipart/form-data">
            {{method_field('post')}}
                @csrf
                @include('productos.form.form')

              <!-- /.card-body -->


            </form>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('scripts')
  <script src="/js/productoCategoria.js"></script>

  <script>
    $(document).ready(function(){

    $('.input-images-1').imageUploader();

      

    });
  </script>


@stop
