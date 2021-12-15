@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Konten</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="{{url('/konten')}}">Data Konten</a></li>
              <li class="breadcrumb-item active">Tambah Konten</li>
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
        <i class="far fa-list-alt"></i> Form Tambah Data Konten</h3>
        <div class="card-tools">
          <a href="{{url('/konten')}}" class="btn btn-sm btn-warning 
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
       action="{{ url('/konten') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
           <span class="text-info">
            <i class="fas fa-konten-circle"></i> <u>Data Konten</u>
          </span></label>
          </div>          
          
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">
            Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control @error('judul') 
             is-invalid @enderror" name="judul" id="judul" value="">
            </div>
          </div>
          @error('judul')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">
           Tanggal</label>
            <div class="col-sm-7">
              <input type="date" class="form-control 
              @error('tanggal') is-invalid @enderror" name="tanggal" 
              id="tanggal" value="">
            </div>
          </div>
          @error('tanggal')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="jenis" class="col-sm-3 col-form-label">
            Jenis Konten</label>
            <div class="col-sm-7">
              <input type="text" class="form-control @error('jenis') 
             is-invalid @enderror" name="jenis" id="jenis" value="">
            </div>
          </div>
          @error('jenis')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="isi" class="col-sm-3 
            col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea type="text" class="form-control 
           @error('isi') is-invalid @enderror" name="isi" 
           id="isi" value=""></textarea>
            </div>
          </div>
          @error('isi')
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

