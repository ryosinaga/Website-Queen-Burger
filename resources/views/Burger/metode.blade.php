@extends('layout.main')

@section('title', 'Pembayaran')

@section('container')

    <section class="story-area left-text center-sm-text">
        <div class="container display-inline">
            <div class="containers">
                <div class="card text-center">
                    <div class="card-header">
                        Detail Pesanan
                    </div>
                    <div class="card-body">
                    <div class="j-input j-append-big-btn">
                    </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Total Beli</th>
                                <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderModel as $a)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{ $a->nama_menu }}</td>
                                    <td>{{$a->jumlah}}</td>
                                    @php
                                        $per_harga = 0;
                                    @endphp
                                        @php
                                            $total_harga = $a->product_id*$a->jumlah
                                        @endphp
                                    <td>{{$total_harga}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @php
                            $hitung = 0;
                        @endphp
                        @foreach ($orderModel as $total)
                            @php
                                $hitung = $hitung+$total->product_id*$total->jumlah
                            @endphp
                        @endforeach
                        <p>Total : {{$hitung}}</p>
                        <div style="margin-top:50px">
                        <form class="d-inline" action="{{ route('metode-selesai') }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-primary" name="delete">Bayar</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection