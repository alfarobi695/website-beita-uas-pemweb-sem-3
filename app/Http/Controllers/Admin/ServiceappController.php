<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Serviceapp;
use Illuminate\Support\Facades\Validator;

class ServiceappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batas = 1;
        $data_satu = Serviceapp::orderBy('id_serviceapp')->paginate($batas);
        $no = ($batas * ($data_satu->currentpage()-1))+1;
        return view('admin.page.service.satu', 
        ['DataSatu' => $data_satu,'no'=>$no]);
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
        $data_satu = Serviceapp::find($id);
        return view('admin.page.service.detail', ['DataSatu' => 
        $data_satu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_satu = Serviceapp::find($id);
    return view('admin.page.service.edit', ['DataSatu' => 
    $data_satu]);

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
        
            'isi' => 'required',
        ])->validated();

        $data_satu = Serviceapp::find($id);
                $data_satu->judul = $request->judul;
                $data_satu->tanggal = $request->tanggal;
                $data_satu->isi = $request->isi;
        $data_satu->update();
        return redirect('/servicesatu')->with('status', 
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
        //
    }
}
