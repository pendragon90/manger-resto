@extends('layouts/app')

@section('title', 'Halaman Acccount')
@section('style')
<style>
    body {
        background-color: var(--tema);
    }
</style>
@endsection

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- style end -->
@endsection

@section('content')
<div class="halaman-account">
    <div class="container account rounded-4">
        <form>
            <div class="gambar text-center">
                <img src="img/profil.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
              </div>
            <div class="body mb-4">
                <label for="name">Name :</label>
                <p id="name" class="border-bottom">{{ Auth::user()->name }}</p>
            </div>
            <div class="body mb-4">
                <label for="email">Email :</label>
                <p id="email" class="border-bottom">{{ Auth::user()->email }}</p>
            </div>
            <div class="body mb-4">
                <label for="gender">Gender :</label>
                <p id="gender" class="border-bottom">Laki-laki</p>
            </div>
            <div class="body mb-4">
                <label for="birthday">Birthday :</label>
                <p id="birthday" class="border-bottom">20 Jun 2005</p>
            </div>
            <button type="button" class="btn tombol tombol-warn" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Edit
            </button>

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
        </form>
    </div>
</div>
@endsection