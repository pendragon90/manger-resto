@extends('layouts/app')

@section('title', 'Manger Resto')

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/detail.css") }}">
    <!-- style end -->
@endsection

@section('content')
    <div class="container detail d-flex justify-content-center rounded-4 p-5" style="margin-top: 5rem">
       {{-- <div class="" style="width: 18rem"> --}}
        <img src="../img/rendang.jpg" alt="" class="w-50">
       {{-- </div> --}}
        <div class="body-detail mx-3 w-50">
            <h4 id="name">{{ $product->title }}</h4>
            <label for="description">Description :</label>
             <p id="description">{{ $product->description }}</p>
            <span>Rp{{ number_format($product->price, 0, ',', '.') }}</span> 
            {{-- <form action="shopping"> --}}
                <div class="mb-3 mt-3">
                    <label for="quantity" class="form-label">Jumlah :</label>
                    <input type="number" class="form-control" style="width: 40%" name="quantity" min="1" value="1">
                </div>
                <!-- Button trigger modal -->
                <div class="tombol-pesan container-fluid">
                    <button type="button" class="btn tombol tombol-warn mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Ke Keranjang
                      </button>
                    <button type="button" class="btn tombol tombol-warn mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Pesan
                    </button>
                </div>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-body alert alert-warning p-5">
         <h5> Dalam masa pengembangan</h5>
        </div>
    </div>
  </div>
        </div>
    </div>
@endsection