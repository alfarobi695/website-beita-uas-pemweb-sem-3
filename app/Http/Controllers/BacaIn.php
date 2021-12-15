<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use App\Models\Penulis;
use App\Models\Tag;
class BacaIn extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $data_header1 = Berita::where('judul', 'Trending 1')->first();
        
        // $data_header2 = Berita::where('judul', 'Trending 2')->first();

        // $data_header3 = Berita::where('judul', 'Trending 3')->first();

        // $data_berita = Berita::orderBy('judul')->get();

        
        // return view('baca.index', [
        //     'DataBerita' => $data_berita,
        //     'DataHeader1'=> $data_header1,
        //     'DataHeader2'=> $data_header2,
        //     'DataHeader3'=> $data_header3
        // ]);
        $batas = 9;
        $data_berita = Berita::orderBy('id_berita')->paginate($batas);
        $data_kategori = KategoriBerita::
        orderBy('kategori_berita','asc')->get();
        $data_penulis = Penulis::orderBy('penulis','asc')->
        get();
        
        $no = ($batas * ($data_berita->currentpage()-1))+1;

        return view('baca.index', ['DataBerita' => 
        $data_berita,'DataKategori' => $data_kategori, 
        'DataPenulis' => $data_penulis,  'no'=>$no
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data_berita = Berita::find($id);
        // $data_kategori = KategoriBerita::
        // orderBy('kategori_berita','asc')->get();
        // $data_penulis = Penulis::orderBy('penulis','asc')->
        // get();
        // $data_tag = Tag::orderBy('tag','asc')->get();
        // $tag_berita = $data_berita->tag->pluck('id_tag')->toArray();
        // return view('baca.index', ['DataBerita' => 
        // $data_berita,'DataKategori' => $data_kategori, 
        // 'DataPenulis' => $data_penulis, 'DataTag' => $data_tag, 
        // 'TagBerita' => $tag_berita ]);
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
