@extends('layout.main')

@section('title', 'Queen Burger')

@section('container')

<section class="bg-1 h-700x main-slider pos relative">
    <div class="triangle-up pos-bottom"></div>
      <div class="container h-70">
        <div class="dplay-tbl">
          <div class="dplay-tbl-cell center-text color-white">
            <h1 class="mt-30 mb-15">Queen Burger</h1>
            <h3 class="mt-30 mb-15">More Yummy Than The King</h3>
            <h5><a href="#om" class="btn-primaryc plr-25"><b>Let's See Our Menu</b></a></h5>
          </div>
        </div>
      </div>
  </section>

  

  <section id="om">
    <div class="container">
      <div class="heading">
        
        <h2 style="text-align:center;">Our Menu</h2>
      </div>


      <div class="row" id="menu">
        <div class="col-sm-12">
          <ul class="selecton brdr-b-primary mb-70">
            <li><a class="active" href="#" data-select="*"><b>ALL</b></a></li>
          </ul>
        </div>
      </div>
      <div class="container">
           <div class="row">
                @foreach ($menuMakanan as $a)
                  <div class="col-xs-2 col-md-4">
                    <div class="card-responsive" align="center" style="width: 15rem;">
                        <img class="br-3" src="{{ asset('img/gambar_menu/' . $a->gambar_menu) }}" alt="Menu Image"  width='170px' height='180px' class="card-img-top">
                        <div class="card-body">
                            <h5 class="text-center"><b>{{$a->nama_menu}}</b></h5>
                            <h5 class="mb-10"><b class="color-primary">Rp. {{$a->harga}},00</b></h5>
                          
                            <a href="/order/deskripsi/{{$a->id}}" class="btn-brdr-primary plr-25"><b>Order</b></a>
               
                              
                        </div>
                    </div>
                </div>
                @endforeach 
              </div> 
             
      <!-- <div class="row">
        @foreach ($menuMakanan as $a)
        <div class="col-md-6 food-menu">
          <div class="sided-90x mv-30">
              <div class="s-left"><img class="br-3" src="{{ asset('img/gambar_menu/' . $a->gambar_menu) }}" alt="Menu Image"></div>
            <div class="s-right">
              <h5 class="mb-10"><b>{{$a->nama_menu}}</b><b class="color-primary float-right">Rp. {{$a->harga}},00</b></h5>
              <p class="pr-70">{{$a->deskripsi}}</p>
              <a href="/order/deskripsi/{{$a->id}}" class="btn-brdr-primary plr-25"><b>Order</b></a>
            </div>
          </div>
        </div>
        @endforeach
      </div> -->
      </div>
    </div>
    </div>
  </section>

@endsection