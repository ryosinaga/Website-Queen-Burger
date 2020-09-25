<?php

namespace App\Http\Controllers;

use App\MenuMakanan;
use Illuminate\Http\Request;

use Ramsey\Uuid\Uuid;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class MenuMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuMakanan $menuMakanan)
    {
        $menuMakanan = MenuMakanan::all();
        return view('Burger.index', compact('menuMakanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Burger.create');
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
            'gambar_menu' => 'required|max:1120',
        ]);

        $ekstensi_diperbolehkan = array('png', 'PNG', 'Png','jpg', 'JPG', 'Jpg', 'pdf', 'Pdf', 'PDF');
        $file = $request->file('gambar_menu');
        $ekstensi = $file->getClientOriginalExtension();
        $nama = $request->nama_menu .'.'.$ekstensi;
        $file_tmp = $file->getRealPath();

        $uuid4 = Uuid::uuid4();

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, 'img/gambar_menu/'.$nama);
            
            MenuMakanan::create([
                'id_menu' => $uuid4->toString(),
                'nama_menu' => $request->nama_menu,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'gambar_menu' => $nama,

            ]);

            Session::flash('message_success','Data berhasil ditambahkan');
            return redirect()->route('create-menu-create');

        }else{
            Session::flash('message_error','Extensi file tidak diperbolehkan');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuMakanan  $menuMakanan
     * @return \Illuminate\Http\Response
     */
    public function show(MenuMakanan $menuMakanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuMakanan  $menuMakanan
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuMakanan $menuMakanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuMakanan  $menuMakanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuMakanan $menuMakanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuMakanan  $menuMakanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuMakanan $menuMakanan)
    {
        //
    }
}
