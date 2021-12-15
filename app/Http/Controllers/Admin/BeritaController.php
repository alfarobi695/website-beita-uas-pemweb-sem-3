<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\KategoriBerita;
use App\Models\Penulis;
use App\Models\Tag;
use App\Models\Users;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 5;
        $data_berita = Berita::orderBy('id_berita')->paginate($batas);

        $no = ($batas * ($data_berita->currentpage()-1))+1;
        return view('admin.page.berita.tampil', ['DataBerita' => 
        $data_berita,  'no'=>$no]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = KategoriBerita::
        orderBy('kategori_berita','asc')->get();
        $data_tag = Tag::orderBy('tag','asc')->get();
        $data_penulis = Penulis::orderBy('penulis','asc')->get();

        return view('admin.page.berita.tambah',['DataKategori' => 
        $data_kategori,'DataTag' => $data_tag,'DataPenulis'=>$data_penulis ]);

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
            'kategori_berita' => 'required',
            'judul' => 'required',
            'publisher' => 'required',
            'penulis' => 'required',
            'tanggal_publish' => 'required',
            'keterangan_berita' => 'required',
            'gambar_berita' => 'required|image|mimes:jpeg,jpg,png',

        ])->validated();

        $berita= new Berita;
        $berita->id_kategori_berita = $request->kategori_berita;
        $berita->judul = $request->judul;
        $berita->publisher = $request->publisher;
        $berita->id_penulis = $request->penulis;
        $berita->tanggal_publish = $request->tanggal_publish;
        $berita->keterangan_berita = $request->keterangan_berita;
        $berita->created_by=Auth::user()->id;
        $berita->updated_by=Auth::user()->id;
        $gambar_berita = $request->gambar_berita;
        $namafile = time().'.'.$gambar_berita->
        getClientOriginalExtension();
        $gambar_berita->move('public/gambar_berita/',$namafile);
        $berita->gambar_berita = $namafile;
        $berita->save();
        $berita->tag()->attach($request->input("list_berita"));
        return redirect('/berita')->with('status', 
        'Data berita berhasil dutambahkan');

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
        $data_tag = Tag::orderBy('tag','asc')->get();
        $tag_berita = $data_berita->tag->pluck('id_tag')->toArray();
        return view('admin.page.berita.detail', ['DataBerita' => 
        $data_berita,'DataKategori' => $data_kategori, 
        'DataPenulis' => $data_penulis, 'DataTag' => $data_tag, 
        'TagBerita' => $tag_berita ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_berita = Berita::find($id);
        $data_kategori = KategoriBerita::
        orderBy('kategori_berita','asc')->get();
        $data_penulis = Penulis::orderBy('penulis','asc')->
        get();
        $data_tag = Tag::orderBy('tag','asc')->get();
        $tag_berita = $data_berita->tag->pluck('id_tag')->toArray();
        return view('admin.page.berita.edit', ['DataBerita' => 
        $data_berita,'DataKategori' => $data_kategori, 
        'DataPenulis' => $data_penulis, 'DataTag' => $data_tag, 
        'TagBerita' => $tag_berita ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'kategori_berita' => 'required',
            'judul' => 'required',
            'publisher' => 'required',
            'penulis' => 'required',
            'tanggal_publish' => 'required',
            'keterangan_berita' => 'required',
            'gambar_berita' => 'image|mimes:jpeg,jpg,png',
        ])->validated();

        $data_berita = Berita::find($id);

        $namafileold = $data_berita->foto;
        if($request->has('gambar_berita')){
            if(File::exists('public/gambar_berita/'.$namafileold)) {
                File::delete('public/gambar_berita/'.$namafileold);
            }
            $data_berita->id_kategori_berita = $request->kategori_berita;
            $data_berita->judul = $request->judul;
            $data_berita->publisher = $request->publisher;
            $data_berita->id_penulis = $request->penulis;
            $data_berita->tanggal_publish = $request->tanggal_publish;
            $data_berita->keterangan_berita = $request->keterangan_berita;
            $gambar_berita = $request->gambar_berita;
            $namafile = time().'.'.$gambar_berita->
            getClientOriginalExtension();
            $gambar_berita->move('public/gambar_berita/',$namafile);
            $data_berita->gambar_berita = $namafile;
        }else{
            $data_berita->id_kategori_berita = $request->kategori_berita;
            $data_berita->judul = $request->judul;
            $data_berita->publisher = $request->publisher;
            $data_berita->id_penulis = $request->penulis;
            $data_berita->tanggal_publish = $request->tanggal_publish;
            $data_berita->keterangan_berita = $request->keterangan_berita;
        }
        $data_berita->update();
        return redirect('/berita')->with('status', 
        'Data berita berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_berita = Berita::find($id);
        $namafile = $data_berita->gambar_berita;
        if(File::exists('public/cover/'.$namafile)) {
            File::delete('public/cover/'.$namafile);
        }
        $data_berita->delete();
        return redirect('/berita')->with('status', 
        'Data buku berhasil dihapus');

    }
    public function search(Request $request){
        $batas = 2;
        $cari = $request->katakunci;
        $data_berita = Berita::where('judul','like',"%".$cari."%")
        ->orderBy('judul')->paginate($batas);
        $jumlah_data = $data_berita->count("id");
        $no = ($batas * ($data_berita->currentpage()-1))+1;
        return view('admin.page.berita.cari', 
        ['DataBerita' =>$data_berita,'JumlahDataBerita'=>$jumlah_data,
        'no'=>$no, 'cari'=>$cari]);

    }

}
