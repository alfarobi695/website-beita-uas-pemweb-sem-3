@extends('admin.layouts.app')
@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-file-alt"></i> serviceapp</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"> serviceapp</li>
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
                    <h3 class="card-title" style="margin-top:5px;">
                    <i class="fas fa-list-ul"></i> Daftar  serviceapp</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="col-md-12">

                </div>
                <div class="card-body">
                @if (session('status'))
                    <div class="col-sm-12">
                        <div class="alert alert-success" role="alert">
                        {!! session()->get('status') !!}</div>
                    </div>
                @endif
                
                <table class="table table-bordered">
                    <thead>                  
                        <tr>
                        <th width="5%">No</th>
                        <th width="50%">Judul</th>
                        <th width="30%">isi</th>
                        <th width="15%"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (!empty($DataSatu))
                        @foreach($DataSatu as $key => $Satu)
                        <tr>
                        <td>{{$no}}</td>
                        <td>{{$Satu->judul }}</td>
                        <td>{{$Satu->isi}}</td>
                        <td align="center">
                                
            
                                        
                                <a href="{{url('/servicesatu.'.$Satu->id_serviceapp.'.edit')}}" 
                                class="btn btn-xs btn-info" title="Edit">
                                <i class="fas fa-edit"></i></a>

                                <a href="{{url('/servicesatu.'.$Satu->id_serviceapp.'.detail')}}" 
                                class="btn btn-xs btn-info" title="Detail">
                                <i class="fas fa-eye"></i></a>
                                
                        </td>
                        </tr>
                        @php
                        $no++
                        @endphp

                        @endforeach
                    @else
                    <tr><td colspan="5">Belum ada data user
                    </td></tr>
                    @endif
                    
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 
                 float-right">
                {{ $DataSatu->links() }}
                </ul>
              </div>
            </div>
            <!-- /.card -->

</section>
<!-- /.content -->
@endsection
