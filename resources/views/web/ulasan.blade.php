@extends('layouts/app')

@section('title', 'Menu')

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/menu.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- style end -->
@endsection

@section('content')
<div class="ulasan-lengkap container">
  @php
   $reversedComments = $comments->reverse();
  @endphp

    @foreach ($reversedComments as $comment)
    <div class="ulasan-body rounded-4 mb-3 p-2 position-relative mx-auto">
      <div class="gambar">
        @if ($comment->user_id === 1)
        <img src="img/profilme.jpg" class="rounded-circle" alt="woman avatar" width="90" height="90">
        @else
        <img src="img/profil.jpg" class="rounded-circle" alt="woman avatar" width="90" height="90">
        @endif
      </div>
      <div class="konten-ulasan">
        <h4 class="text-start text-wrap">{{ $comment->user->name }} :</h4>
        <p class="text-start text-wrap ulasan-text">{{ $comment->comment }}</p>
        @if(Auth::check() && $comment->user_id === auth()->user()->id || auth()->user()->id === 1)
        <div class="btn tombol edit p-0">
          <!-- Button trigger modal -->
<button type="button" class="btn tombol edit p-0" data-bs-toggle="modal" data-bs-target="#ulasanModal">
  <i class="bi bi-pencil-square"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="ulasanModal" tabindex="-1" aria-labelledby="ulasanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="m-2" action="{{ route('comments.update', ['id' => $comment->id]) }}" method="POST">
        @csrf
        @method("PATCH")
        
        <div class="form-group">
          <input type="hidden" name="user_id" value="{{ session('user_id') }}">
          <input type="text" class="form-control" id="ulasanInput" name="comment" value="{{ $comment->comment }}">
        </div>
        <button class="btn tombol update float-start" type="submit">Update</button>
      </form>
    </div>
  </div>
</div>
        </div>
        @endif

       <div class="">
        <span class="text-start text-secondary">{{ $comment->created_at->diffForHumans() }}</span>
       </div>
      </div>      
      @if(Auth::check() && $comment->user_id === auth()->user()->id || auth()->user()->id === 1)
      <form action="{{ route('comments.destroy', ['id' => $comment->id]) }}" method="POST" class="position-absolute">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn tombol p-2 hapus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
        </svg></button>
      </form>  
      @endif
</div>
    @endforeach

</div>

@if (Auth::check())
<div class="tambah-komentar bg-light fixed-bottom container p-3 rounded-4 shadow">
  <form action="{{ url('ulasan') }}" method="POST">
    @csrf
    <div class="mb-3">
      <input type="hidden" name="user_id" value="{{ session('user_id') }}">
      <input type="text" placeholder="Masukkan Komentar" class="form-control" name="comment">
    </div>
    <button class="btn tombol" type="submit">Kirim</button>
  </form>
</div>
@else
<div class="tambah-komentar bg-light fixed-bottom container p-3 rounded-4 shadow">
  <form action="{{ url('ulasan') }}" method="POST">
    <div class="mb-3">
      <input type="hidden" name="user_id" value="{{ session('user_id') }}">
      <input type="text" placeholder="Masukkan Komentar" class="form-control" name="comment">
    </div>
    
<!-- Button trigger modal -->
<button type="button" class="btn tombol tombol-warn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  </form>
</div>
@endif

@section('js')
    <script>
const btn = document.querySelector('.tombol-warn');
const warn = document.querySelector('.warn');

btn.addEventListener('click', () => {
  warn.classList.add('warn-active');
});
// swipe
    </script>
@endsection
    @endsection