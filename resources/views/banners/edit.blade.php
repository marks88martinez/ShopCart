@extends('layouts.dashboard')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Banner new</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <a href="/admin/banners/create" type="button" class="btn btn bg-gradient-primary btn-sm float-right p-2 m-2"><i class="nav-icon far fa-image"></i>  New Banner</a>
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
              <h3 class="card-title">Create Banner</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

            <form method = "POST" action= "/admin/banners/{{ $banner->id }}" enctype="multipart/form-data">
                {{method_field('put')}}
                @csrf

              @include('banners.form.form')

            </form>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  @endsection



  @section('scripts')
  <script src="/js/banner.js"></script>
  @stop


  

  