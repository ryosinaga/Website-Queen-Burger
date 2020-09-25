<head>
  <style> 
.form{
    width: 75%;
    border: 2px solid black;
    padding: 20px 40px 20px 40px;
    margin-left: 160px;
    margin-bottom: 40px;
    box-shadow: 0px 5px 5px 5px;
    border-radius: 5px;
}
</style> 
</head>

@extends('layout.main')

@section('title', 'Order Menu')

@section('container')

    <!-- Body -->
    <section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="heading">
                <!-- <img src="/assets/images/burger-1.jpg" alt="" style="margin-top:100px;height:200px;width:200px;"> -->
                <center>    
                <h2 class="mt-4 formhead" >{{$menuMakanan->nama_menu}}</h2>
                <h5 class="mt-10 mb-30">Silahkan Order Dengan Mengisi Data Dibawah Ini</h5>
                </center>
            </div>
            <form class="form-style-1 placeholder-1" action="/order/{{$menuMakanan->id}}/store" method="POST">
            {{ csrf_field() }}
                
                <div class="form">
                    <input name="id" class="mb-20" type="hidden" value="">
                    <p>
                    <label for="Burger">Nama Burger :</label>
                    <div class="col-md-12">
                        <input name="nama_menu" class="mb-20" type="text" value="{{$menuMakanan->nama_menu}}" readonly>
                    </div>
                    </p>
                    <p>
                    <label for="Orderer">Nama Pemesan :</label>
                    <div class="col-md-6">
                        <input name="nama_pemesan" class="mb-20" type="text" placeholder="Nama Pemesan">
                    </div>
                    </p>
                    <p>
                    <label for="Contact">No Telepon :</label>
                    <div class="col-md-6">
                        <input name="nomor_telepon" class="mb-20" type="text" placeholder="No Telepon">
                    </div>
                    </p>
                    <p>
                    <label for="Quantity">Jumlah :</label>
                    <div class="col-md-12">
                        <input name="jumlah" class="mb-20" type="number" placeholder="Jumlah Pesanan">
                    </div>
                    </p>
                    <p>
                    <label for="Address">Alamat</label>
                    <div class="col-md-12">
                        <textarea name="alamat" class="h-200x ptb-20" placeholder="Alamat"></textarea>
                    </div>
                    </p>

                    <h6 class="center-text mtb-30"><button type="submit" class="btn-primaryc plr-25"><b>Pesan Sekarang</b></button></h6>
                </div>
            </form>
        </div>
    </section>

@endsection