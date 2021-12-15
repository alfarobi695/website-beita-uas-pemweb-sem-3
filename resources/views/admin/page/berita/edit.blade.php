@extends('admin.layouts.app')
@section('content-header')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Data Berita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a 
               href="{{url('/berita')}}">Data Berita</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
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
        <i class="far fa-list-alt"></i> Form Tambah Data Berita</h3>
        <div class="card-tools">
          <a href="{{url('/berita')}}" class="btn btn-sm btn-warning 
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
       action="{{ url('/berita.'.$DataBerita->id_berita) }}"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <div class="card-body">
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label">
            <span class="text-info">
            <i class="fas fa-user-circle"></i> <u>
           Data Berita</u></span></label>
          </div>          
          <div class="form-group row">
            <label for="gambar_berita" class="col-sm-3 col-form-label">
            Gambar Berita </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input 
              @error('gambar_berita') is-invalid @enderror" name="gambar_berita" 
               id="customFile">
                <label class="custom-file-label" 
                for="customFile">Choose file</label>
              </div>  
            </div>
          </div>          
          @error('gambar_berita')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          <div class="form-group row">
            <label for="kategori" class="col-sm-3 col-form-label">
            Kategori Berita</label>
            <div class="col-sm-7">
              <select class="form-control @error('kategori_berita') 
              is-invalid @enderror" id="kategori_berita" 
              name="kategori_berita">
                <option value="">- Pilih Kategori -</option>
                @if (!empty($DataKategori))
                    @foreach($DataKategori as $key => $Kategori)
                        <option value="{{ $Kategori->
                       id_kategori_berita }}"
                        @if ($Kategori->
                     id_kategori_berita==$DataBerita->id_kategori_berita)
                          selected
                        @endif
                        >{{ $Kategori->kategori_berita }}</option>
                    @endforeach
                @endif
              </select>
            </div>
          </div>
          @error('kategori_berita')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">
            Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control 
               @error('judul') is-invalid @enderror" 
              name="judul" id="judul" value="{{ $DataBerita->
             judul}}">
            </div>
          </div>
          @error('judul')
              <span class="text-danger">{{ $message }}</span>
          @enderror
          <div class="form-group row">
            <label for="publisher" class="col-sm-3 col-form-label">
             Publisher</label>
            <div class="col-sm-7">
              <input type="text" class="form-control 
              @error('publisher') is-invalid @enderror" 
              name="publisher" id="publisher" value="{{ $DataBerita->
             publisher }}">
            </div>
          </div>
          @error('publisher')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          <div class="form-group row">
            <label for="penulis" class="col-sm-3 col-form-label">
             Penulis</label>
            <div class="col-sm-7">
              <select class="form-control  @error('penulis') is-
              invalid @enderror" id="penulis" name="penulis">
                <option value="">- Pilih Penulis -</option>
                 @if (!empty($DataPenulis))
                    @foreach($DataPenulis as $key => $Penulis)
                      <option value="{{ $Penulis->id_penulis }}"
                        @if ($Penulis->id_penulis==$DataBerita->
                        id_penulis)
                          selected
                        @endif
                        >{{ $Penulis->penulis }}</option>
                    @endforeach
                @endif
              </select>
            </div>
          </div>
          @error('penulis')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">
            Tanggal Publish</label>
            <div class="col-sm-7">
              <div class="input-group date">
                <input type="date"  class="form-control 
                @error('tanggal_publish') is-invalid @enderror" 
                name="tanggal_publish" id="datepicker-year"  
                autocomplete="off" 
                 value="{{ $DataBerita->tanggal_publish }}">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas 
                     fa-calendar-alt"></i></span>
                  </div>
              </div>
            </div>
          </div>
          @error('tanggal_publish')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          <div class="form-group row">
            <label for="keterangan_berita" class="col-sm-3 col-form-label">
            Keterangan Berita</label>
            <div class="col-sm-7">
              <textarea class="form-control @error('keterangan_berita') 
               is-invalid @enderror" 
              name="keterangan_berita" id="editor1" rows="12">{{ $DataBerita->
              keterangan_berita }}</textarea>
            </div>
          </div>  
          @error('keterangan_berita')
              <span class="text-danger">{{ $message }}</span>
          @enderror

          <div class="form-group row">
            <label for="hobi" class="col-sm-3 col-form-label">
            Tag</label>
            <div class="col-sm-7">
            @if (!empty($DataTag))
                @foreach($DataTag as $key => $Tag)
                    <input type="checkbox" name="list_berita[]" 
                    value="{{ $Tag->id_tag }}"
                    @if (in_array($Tag->id_tag, $TagBerita))
                    checked
                    @endif
                    > {{ $Tag->tag }} <br>
                @endforeach
            @endif
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right">
            <i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
<!-- /.content -->
@endsection

