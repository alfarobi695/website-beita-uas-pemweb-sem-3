@extends('admin.layouts.app')

@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> 
           Detail Data Konten</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a 
              href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item"><a 
              href="{{url('/konten')}}">Data Konten</a></li>
              <li class="breadcrumb-item active">Detail Data 
              Konten</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('main-content')
<section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="{{url('/konten')}}" class="btn btn-sm 
                  btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> 
                 Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-
                     circle"></i> <strong>Data Konten<strong></td>
                      </tr>                      
                        
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%">{{ $DataKonten->judul}}</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Tanggal<strong></td>
                        <td width="80%">{{ $DataKonten->tanggal}}</td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Jenis Konten<strong></td>
                        <td width="80%">{{ $DataKonten->jenis_konten}}</td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%">{{ $DataKonten->isi}}</td>
                      </tr>  
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
@endsection
