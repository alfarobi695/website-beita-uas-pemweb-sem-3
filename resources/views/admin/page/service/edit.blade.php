@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data serviceapp</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/servicesatu')}}">Data serviceapp</a></li>
              <li class="breadcrumb-item active">Edit Data serviceapp</li>
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
    <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data serviceapp</h3>
    <div class="card-tools">
                  <a href="{{url('/servicesatu')}}" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>

      <!-- /.card-header -->
      <!-- form start -->
      </br>
      
      <form class="form-horizontal" method="post" 
      action="{{ url('/servicesatu.'.$DataSatu->id_serviceapp) }}"
      enctype="multipart/form-data">
      @csrf
      <input type="hidden" value="PUT" name="_method">
      <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
             <span class="text-info">
            <i class="fas fa-user-circle"></i> <u>Data Service</u>
           </span></label>
          </div>
          
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">
             Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control @error('judul') 
              is-invalid @enderror" name="judul" 
              id="judul" value="{{ $DataSatu->judul}}">
            </div>
          </div>
          @error('judul')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">
            Tanggal</label>
            <div class="col-sm-7">
              <input type="date" class="form-control @error('tanggal')  
              is-invalid @enderror" name="tanggal" 
              id="tanggal" value="{{ $DataSatu->tanggal}}">
            </div>
          </div>
          @error('tanggal')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="isi" class="col-sm-3 col-form-label">
             Isi</label>
            <div class="col-sm-7"> 
              <textarea  class="form-control @error('isi')  
              is-invalid @enderror" 
              name="isi" id="isi" value="{{ $DataSatu->isi}}">{{ $DataSatu->isi}}</textarea>
            </div>
          </div>
          

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
@endsection

