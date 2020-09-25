<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\OrderModel;
use App\PembayaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = OrderModel::all();
        // $amount = DB::table('create_order')->where('jumlah')->count();
        if (Auth::guest()){
            Session::flash('message_login','Harus Login Dulu');
            return redirect()->route('login');
        } else {
            $tampil = OrderModel::where('user_id',Auth::user()->id)->get();
            return view('Burger.pembayaran', compact('order', 'tampil'));
        }
    }

    public function metode_pembayaran(OrderModel $orderModel)
    {
        $orderModel = OrderModel::where('user_id',Auth::user()->id)->get();
        return view('Burger.metode', compact('orderModel'));
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
     * @param  \App\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function show(PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function edit(PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembayaranModel $pembayaranModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PembayaranModel  $pembayaranModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembayaranModel $pembayaranModel)
    {
        //
    }
}
