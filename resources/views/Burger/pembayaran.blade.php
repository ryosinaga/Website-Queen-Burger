@extends('layout.main')

@section('title', 'Pembayaran')

@section('container')

    
<section class="story-area left-text center-sm-text">
        <div class="container display-inline">
            <center style="margin-top:80px">
                <ul class="list-group col-md-4">
                    @foreach($tampil as $a)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$a->nama_menu}}
                        <span class="badge badge-primary badge-pill">{{$a->jumlah}}</span>
                        @php
                            $total_harga = 0;
                        @endphp
                        @foreach ($tampil as $total)
                            @php
                                $total_harga = $total->product_id*$total->jumlah
                            @endphp
                        @endforeach
                    </li>
                    @endforeach
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Total</span>
                        </div>
                        @php
                            $hitung = 0;
                        @endphp
                        @foreach ($tampil as $total)
                            @php
                                $hitung = $hitung+$total->product_id*$total->jumlah
                            @endphp
                        @endforeach
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="Rp. {{$hitung}},00" readonly>
                        <div class="input-group-append">
                            <a href="{{ route('metode') }}" type="button" class="form-control btn btn-primary" aria-label="Amount (to the nearest dollar)" > Checkout </a>
                        </div>
                    </div>
                </ul>
            </center>>
        </div>
    </section>


@endsection