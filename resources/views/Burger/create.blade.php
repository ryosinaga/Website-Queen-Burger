@extends('layout.main')

@section('title', 'Create Menu')

@section('container')

<section class="story-area left-text center-sm-text">
        <div class="container">
            <div class="heading">
                <h3 class="mt-10 mb-30">Create Menu</h3>
            </div>
            @if(Session::has('message_error'))
                <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message_error') !!}</em></div>
            @elseif(Session::has('message_success'))
                <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message_success') !!}</em></div>
            @endif

            <form class="form-style-1 placeholder-1" action="{{ route('create-menu-store') }}" method="POST" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <div class="row">
                    <input name="id" class="mb-20" type="hidden" value="">
                    <div class="col-md-6">
                        <input name="nama_menu" class="mb-20" type="text" placeholder="Nama Menu">
                    </div>
                    <div class="col-md-6">
                        <input name="deskripsi" class="mb-20" type="text" placeholder="Deskripsi">
                    </div>
                    <div class="col-md-6">
                        <input name="harga" class="mb-20" type="number" placeholder="Harga">
                    </div>
                    <div class="col-md-6">
                        <label class="j-label">Jenis</label>
                        <label class="j-input j-select">
                            <select name="jenis">
                                <option value="" selected>Burger</option>
                                <option value="burger1">Burger Small</option>
                                <option value="burger2">Burger Reguler</option>
                                <option value="burger3">Burger Big</option>
                        
                                
                            </select>
                            <i></i>
                        </label>
                    </div>
                    <div class="j-input j-append-big-btn">
                        <div class="col-md-12">
                            <input name="gambar_menu" class="mb-20" type="file" onchange="if (!window.__cfRLUnblockHandlers) return false; document.getElementById('file_input').value = this.value;" data-cf-modified-f80eed9e4f8c70c96d7ee04e-="">
                        </div>
                        <input type="text" id="file_input" readonly="" placeholder="">
                        <span class="j-hint">Format: jpg / png / pdf, less 1Mb</span>
                    </div>

                    <h6 class="center-text mtb-30"><button type="submit" class="btn-primaryc plr-25"><b>Tambah Menu</b></button></h6>
                </div>
            </form>
        </div>
    </section>

@endsection