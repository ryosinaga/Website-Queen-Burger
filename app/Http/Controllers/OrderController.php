<?php

namespace App\Http\Controllers;

use App\OrderModel;
use App\MenuMakanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Ramsey\Uuid\Uuid;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, MenuMakanan $menuMakanan)
    {
        if (Auth::guest()){
            Session::flash('message_login','Harus Login Dulu');
            return redirect()->route('login');
        } else {
            return view('Burger.deskripsi', compact('menuMakanan'));
        }
    }

    public function order (Request $request, MenuMakanan $menuMakanan)
    {
        return view('Burger.order', compact('menuMakanan'));
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
        $this->validate($request,[
            'nama_pemesan' => 'required',
            'nomor_telepon' => 'required',
            'jumlah' => 'required',
            'alamat' => 'required',
        ]);

        $uuid4 = Uuid::uuid4();
        $menu = MenuMakanan::where('id',$request->menuMakanan)->first();

        OrderModel::create([
            'user_id' => Auth::user()->id,
            'product_id' => $menu->harga,
            'nama_menu' => $request->nama_menu,
            'nama_pemesan' => $request->nama_pemesan,
            'nomor_telepon' => $request->nomor_telepon,
            'jumlah' => $request->jumlah,
            'alamat' => $request->alamat,
        ]);

        Session::flash('message_success', 'Order Berhasil');
        return redirect()->route('metode');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderModel  $orderModel
     * @return \Illuminate\Http\Response
     */
    public function show(OrderModel $orderModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderModel  $orderModel
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderModel $orderModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderModel  $orderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderModel $orderModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderModel  $orderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, OrderModel $orderModel)
    {
        DB::table("create_order")->where('user_id',Auth::user()->id)->delete();
        return redirect()->route('selesai');
    }

    public function bayar_selesai(OrderModel $orderModel)
    {
        return view("Burger.selesai");
    }
}
