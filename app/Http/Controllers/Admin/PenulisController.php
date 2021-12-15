<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penulis;
use Illuminate\Support\Facades\Validator;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $batas = 5;
        $data_penulis = Penulis::orderBy('Penulis')->paginate($batas);
        $no = ($batas * ($data_penulis->currentpage()-1))+1;
        return view('admin.page.penulis.tampil', 
        ['DataPenulis' => $data_penulis,  'no'=>$no]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.penulis.tambah');
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
            'penulis' => 'required',
            'email' => 'required|email',

        ])->validated();

        $penulis= new Penulis;
        $penulis->penulis = $request->penulis;
        $penulis->email = $request->email;
 
        $penulis->save();
        return redirect('/penulis') ->with('status', 'Data penulis 
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_penulis = Penulis::find($id);
        return view('admin.page.penulis.edit', ['DataPenulis' => 
        $data_penulis]);

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
            'penulis' => 'required',
            'email' => 'required|email',
        ])->validated();

        $data_penulis = Penulis::find($id);
                $data_penulis->penulis = $request->penulis;
                $data_penulis->email = $request->email;
        $data_penulis->update();
        return redirect('/penulis')->with('status', 
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
        $data_penulis = Penulis::find($id);
        $data_penulis->delete();
        return redirect('/penulis')->with('status', 
        'Data penulis berhasil dihapus');

    }
    public function search(Request $request)
    {
        $batas = 2;
        $cari = $request->katakunci;
        $data_penulis = Penulis::where('penulis','like',"%".$cari."%")
        ->orderBy('penulis')->paginate($batas);
        $jumlah_data = $data_penulis->count("id");
        $no = ($batas * ($data_penulis->currentpage()-1))+1;
        return view('admin.page.penulis.cari', ['DataPenulis' =>
        $data_penulis,'JumlahDataPenulis'=>$jumlah_data,'no'=>$no, 
        'cari'=>$cari]);
    }

}
