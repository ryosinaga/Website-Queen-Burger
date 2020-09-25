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

@section('title', 'Pembayaran')

@section('container')

<section class="story-area left-text center-sm-text">
    <div class="container display-inline">
        <div class="containers">
            <h3 align="center">Upload Bukti Pembayaran</h3>
            <h5 align="center">(No. Rek ATM Bersama : 12345678910)</h5>
            <br>
        </div>
        <div class="container">

            <form class="form-style-1 placeholder-1" action="{{ route('create-bukti-store') }}" method="POST"
                enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <div class="form">
                    <br>
                    <div class="col-md-12">
                        <input name="gambar_bukti" class="mb-20" type="file"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; document.getElementById('file_input').value = this.value;"
                            data-cf-modified-f80eed9e4f8c70c96d7ee04e-="">
                    </div>
                    <!-- <input type="text" id="file_input" readonly="" placeholder=""> -->
                    <span class="j-hint" style="margin:10px 10px 50px 10px">*Format: jpg / png / pdf, less 1Mb</span>
                    <br>
                
                    <center>
                    <button type="submit" onclick="notif()" class="btn-primaryc plr-25"><b>UPLOAD</b></button>
                    <script>
                            
                        function notif(){
                            alert("Pembayaran Selesai , Pesanan akan diproses");

                        }
                    </script>
                    </center>
                    <br>
                    <br>
                    <center>
                    <u><a href="{{ route('home-dashboard') }}" ><b>Kembali Ke Halaman Utama</b></a></u>
                    </center>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection