@extends('admin.layouts.app')
@section('content-header')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h3><i class="fas fa-book"></i> Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <a href="{{url('/profil')}}">Home</a></li>
              <li class="breadcrumb-item">
              <a href="{{url('/berita')}}">Data Berita</a></li>
              <li class="breadcrumb-item active">
             Detail Data Berita</li>
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
                  <a href="{{url('/berita')}}" class="btn btn-sm 
                  btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left">
                 </i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                      
                      <tr>
                        <td><strong>Gambar Berita<strong></td> 
                        <td><img 
                 src="{{asset('public/gambar_berita/'.$DataBerita->gambar_berita)}}" 
                        class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>
                         Kategori Berita<strong></td>
                        <td width="80%">{{ $DataBerita->
                        kategori_berita->kategori_berita }}</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%">{{ $DataBerita->judul }}</td>
                      </tr>                 
                      <tr>
                        <td width="20%">
                        <strong>Publisher<strong></td>
                        <td width="80%">{{ $DataBerita->publisher }}
                          </td>
                      </tr>
                      <tr>
                        <td width="20%">
                        <strong>Penulis<strong></td>
                        <td width="80%">{{ $DataBerita->penulis->penulis}}</td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>
                        Tanggal Publish<strong></td>
                        <td width="80%">
                        {{ $DataBerita->tanggal_publish }}</td>
                      </tr>
                      <tr>
                        <td><strong>Tag<strong></td>
                        <td>
                          <ul>
                          @foreach($DataBerita->tag as $tag)
                                <li> {{ $tag->tag }}
                           </li>                               
                           @endforeach
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td width="20%">
                         <strong>Keterangan Berita<strong></td>
                        <td width="80%">
                        {{ $DataBerita->keterangan_berita }}</td>
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
