@extends('layout.main')

@section('title', 'Queen Burger')

@section('container')
  <section class="story-area left-text center-sm-text pos-relative">
    <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
    <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
    <div class="container">
      <div class="heading">
        <h2 style="margin-top:50px" align="center">{{$menuMakanan->nama_menu}}</h2>
      </div>

      <div class="row">
        <div class="col-md-6" style="margin: 0 15% 0 15%; padding: 0 0 0 50px">
          <p class="mb-30">{{$menuMakanan->deskripsi}}.</p>
        </div>
        <div class="col-md-6">
            <img style="width: 300px; position: relative; margin : 0 0 0 200px"class="br-3"  src="{{ asset('img/gambar_menu/' . $menuMakanan->gambar_menu) }}"  width="100px">
        </div>
      </div >
    
    </section>
  
    
    <center>
          <a href="/order/{{$menuMakanan->id}}" class="btn-brdr-primary plr-25"><b>Order</b></a>
          </center>


  </section>

@endsection