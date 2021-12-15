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
              <li class="breadcrumb-item active"> Berita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
@endsection

@section('main-content')
<!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;">
               <i class="fas fa-list-ul"></i> Daftar  Berita</h3>
                <div class="card-tools">
                  <a href="{{url('/berita.tambah')}}" class="btn 
                  btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Berita</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if (session('status'))
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">
                   {!! session()->get('status') !!}</div>
                </div>
              @endif
              <div class="col-md-12">
                  <form method="get" 
                  action="{{url('/berita.cari')}}">
                  @csrf
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" 
                          id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn 
                          btn- primary"><i class="fas fa-search">
                          </i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                @if($JumlahDataBerita>0)
                
                <div class="col-sm-12">                  
                      <div class="alert alert-success" 
                      role="alert">Ditemukan {{ $JumlahDataBerita }} 
                        data dengan kata kunci : {{ $cari }}
                      </div>
                </div>
                <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Kategori</th>
                        <th width="30%">Judul</th>
                        <th width="20%">Publisher</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    @if (!empty($DataBerita))
                    @foreach($DataBerita as $key => $Berita)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $Berita->kategori_berita->kategori_berita 
                         }}</td>
                        <td>{{ $Berita->judul }}</td>
                        <td>{{ $Berita->publisher }}</td>
                        <td align="center">
                          <form action="{{url('/berita.'.
                          $Berita->id_berita)}}" method="Post" 
                          onsubmit="return confirm('Apakah data ingin dihapus?')">
                          @csrf
                          <a href="{{url('/berita.'.
                          $Berita->id_berita.'.detail')}}" class="btn btn-xs 
                          btn-info" title="Detail">
                         <i class="fas fa-eye"></i></a>
                          
                          <a href="{{url('/berita.'.
                         $Berita->id_berita.'.edit')}}" class="btn btn-xs 
                         btn-info" title="Edit"><i class="fas 
                         fa-edit"></i></a>
                          
                          <input type="hidden" value="DELETE" 
                           name="_method">
                          <button type="submit" class="btn btn-xs 
                          btn-info" title="Hapus"><i class="fas 
                          fa-trash"></i></button> 
                          </form>                        
                        </td>
                      </tr>
                      @php
                      $no++
                      @endphp

                    @endforeach
                    @else
                    <tr><td colspan="5">Belum ada data berita
                   </td></tr>
                    @endif
                    </tbody>
                  </table>  
                  @else
                  <div class="col-sm-12">                  
                      <div class="alert alert-danger" role="alert">
                      Data dengan kata kunci : {{ $cari }}
                        Tidak ditemukan, 
                        <a href="{{url('/berita')}}"><input 
                        type="button" value="Klik Disini Untuk 
                        Kembali" class="btn btn-default"/></a>
                      </div>
                  @endif 
              </div>
              <!-- /.card-body -->
              <!-- <div></div> -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 
               float-right">
                {{ $DataBerita->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

</section>
<!-- /.content -->
@endsection
