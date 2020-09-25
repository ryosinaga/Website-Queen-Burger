<?php

namespace App\Http\Controllers;

use App\ModelBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class bukti extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Burger.selesai");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'gambar_bukti' => 'required|max:1120',
        ]);

        $ekstensi_diperbolehkan = array('png', 'PNG', 'Png','jpg', 'JPG', 'Jpg', 'pdf', 'Pdf', 'PDF');
        $file = $request->file('gambar_bukti');
        $ekstensi = $file->getClientOriginalExtension();
        $nama = $request->nama_menu .'.'.$ekstensi;
        $file_tmp = $file->getRealPath();

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'img/gambar_bukti/'.$nama);
            
            ModelBukti::create([
                'id_user' => Auth::user()->id,
                'gambar_bukti' => $nama,

            ]);

            Session::flash('message_success','Data berhasil ditambahkan');
            return redirect()->route('home-dashboard');

        }else{
            Session::flash('message_error','Extensi file tidak diperbolehkan');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModelBukti  $modelBukti
     * @return \Illuminate\Http\Response
     */
    public function show(ModelBukti $modelBukti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelBukti  $modelBukti
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelBukti $modelBukti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelBukti  $modelBukti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelBukti $modelBukti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelBukti  $modelBukti
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelBukti $modelBukti)
    {
        //
    }
}
