@extends('layouts/app')

@section('title', 'Tambah')

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/tambah.css") }}">
    <!-- style end -->
@endsection

@section('style')
   <style>
     .alert-tambah.active {
        display: block !important;
     }
   </style>
@endsection

@section('content')
<div class="container tambah">
    <div class="alert alert-danger alert-tambah d-none">Saat Ini Tambah Produk Sedang Dinonaktifkan Demi Keamanan</div>
    <form action="menu" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="file" class="form-label">Gambar :</label>
        <input id="file" type="file" name="file-upload" accept="image/*" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Judul :</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi :</label>
            <input type="text" id="description" name="description" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Harga :</label>
            <input type="number" id="price" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori :</label>
            <select name="category" id="category" class="form-select">
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>

        <button class="btn tombol">Tambah Produk</button>
        </form>
</div>

{{-- <script>
    const alertTambah = document.querySelector(".alert-tambah");
const tombol = document.querySelector(".tombol");

tombol.addEventListener("click", () => {
    alertTambah.classList.add('active')
});
</script> --}}
@endsection