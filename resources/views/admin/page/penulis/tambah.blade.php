@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Penulis</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="{{url('/penulis')}}">Data Penulis</a></li>
              <li class="breadcrumb-item active">Tambah Penulis</li>
            </ol>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<section class="content">
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;">
        <i class="far fa-list-alt"></i> Form Tambah Data Penulis</h3>
        <div class="card-tools">
          <a href="{{url('/penulis')}}" class="btn btn-sm btn-warning 
         float-right"><i class="fas fa-arrow-alt-circle-left"></i> 
         Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      </div>
      <form class="form-horizontal" method="post" 
       action="{{ url('/penulis') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
           <span class="text-info">
            <i class="fas fa-penulis-circle"></i> <u>Data Penulis</u>
          </span></label>
          </div>          
         
          <div class="form-group row">
            <label for="penulis" class="col-sm-3 col-form-label">
            Nama</label>
            <div class="col-sm-7">
              <input type="text" class="form-control @error('penulis') 
             is-invalid @enderror" name="penulis" id="penulis" value="">
            </div>
          </div>
          @error('penulis')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">
           Email</label>
            <div class="col-sm-7">
              <input type="text" class="form-control 
              @error('email') is-invalid @enderror" name="email" 
              id="email" value="">
            </div>
          </div>
          @error('email')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right">
            <i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
<!-- /.content -->
@endsection

