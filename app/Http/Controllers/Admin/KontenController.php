<?php

namespace App\Http\Controllers\Admin;

use App\Console\Kernel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Konten_web;
use Illuminate\Support\Facades\Validator;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 2;
        $data_konten = Konten_web::orderBy('id_konten')->paginate($batas);
        $no = ($batas * ($data_konten->currentpage()-1))+1;
        return view('admin.page.konten.tampil', 
        ['DataKonten' => $data_konten,'no'=>$no]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.konten.tambah');
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
            'judul' => 'required',
            'isi' => 'required',
            'jenis'=>'required'

        ])->validated();

        $penulis= new Konten_web();
        $penulis->judul = $request->judul;
        $penulis->tanggal = $request->tanggal;
        $penulis->jenis_konten = $request->jenis;
        $penulis->isi = $request->isi;
 
        $penulis->save();
        return redirect('/konten') ->with('status', 'Data konten 
        berhasil dutambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_konten = Konten_web::find($id);
        return view('admin.page.konten.detail', ['DataKonten' => 
        $data_konten]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_konten = Konten_web::find($id);
    return view('admin.page.konten.edit', ['DataKonten' => 
    $data_konten]);

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
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'jenis'=>'required',
            'isi' => 'required',
        ])->validated();

        $data_konten = Konten_web::find($id);
                $data_konten->judul = $request->judul;
                $data_konten->jenis_konten = $request->jenis;
                $data_konten->tanggal = $request->tanggal;
                $data_konten->isi = $request->isi;
        $data_konten->update();
        return redirect('/konten')->with('status', 
        'Data penulis berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_konten = Konten_web::find($id);
        $data_konten->delete();
        return redirect('/konten')->with('status', 
        'Data konten berhasil dihapus');;

    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_konten = Konten_web::where('judul','like',"%".$cari."%")
        ->orderBy('judul')->paginate($batas);
        $jumlah_data = $data_konten->count("id");
        $no = ($batas * ($data_konten->currentpage()-1))+1;
        return view('admin.page.konten.cari', ['DataKonten' =>
        $data_konten,'JumlahDataKonten'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }

}
