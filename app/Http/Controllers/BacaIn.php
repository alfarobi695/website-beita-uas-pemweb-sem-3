<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\Penulis;
use App\Models\Konten_web;
use App\Models\Serviceapp;
use App\Models\Tag;
use App\Models\Users;
use DateTime;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class BacaIn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $batas = 9;
        $data_berita = Berita::orderBy('id_berita')->paginate($batas);
        $data_kategori = KategoriBerita::
        orderBy('kategori_berita','asc')->get();
        $data_penulis = Penulis::orderBy('penulis','asc')->
        get();
        
        $service1 = Serviceapp::where('id_serviceapp',[1])->first();
        $service2 = Serviceapp::where('id_serviceapp',[2])->first();
        $service3 = Serviceapp::where('id_serviceapp',[3])->first();



        $data_user = Users::orderBy('id','asc')->
        get();
        $no = ($batas * ($data_berita->currentpage()-1))+1;

        return view('baca.index', [
            'DataBerita' => $data_berita,
            'DataKategori' => $data_kategori, 
            'DataPenulis' => $data_penulis,  
            'no'=>$no, 
            'DataUser' => $data_user,
            'Service1'=> $service1,
            'Service2'=> $service2,
            'Service3'=> $service3,
            
        ]);

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_cus' => 'required',
            'email_cus' => 'required',
            'pesan_cus' => 'required',
        ])->validated();

        $service= new Konten_web;
        $service->id_konten=$request->konten_web;
        $service->judul = $request->name_cus;
        $service->jenis_konten = $request->email_cus;
        $service->isi = $request->pesan_cus;
        $service->tanggal = new DateTime();
        $service->save();
        return redirect('/index#contact');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_berita = Berita::find($id);
        $data_kategori = KategoriBerita::
        orderBy('kategori_berita','asc')->get();
        $data_penulis = Penulis::orderBy('penulis','asc')->
        get();
        $data_user = Users::orderBy('id','asc')->
        get();
        $data_tag = Tag::orderBy('tag','asc')->get();
        $tag_berita = $data_berita->tag->pluck('id_tag')->toArray();
        return view('baca.single', [
            'DataBerita' => $data_berita,
            'DataKategori' => $data_kategori, 
            'DataPenulis' => $data_penulis, 
            'DataTag' => $data_tag, 
            'TagBerita' => $tag_berita,
            'DataUser' => $data_user 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
