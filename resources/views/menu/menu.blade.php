@extends('layouts/app')

@section('title', 'Menu')

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/menu.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- style end -->
@endsection

@section('content')
    <!-- menu makanan -->
<div class="container menu mb-5" id="makanan">

  <button id="toggleButton" class="btn shortcut tombol" onclick="toggleTextAndRedirect()">Menuju Menu Minuman</button>
  
  <h2 class="judul text-center fw-bold pb-1">Menu Makanan</h2>
<div class="menuKami row">

@foreach ($products_makanan as $product_makanan)
    <a href="{{ url("menu/$product_makanan->id") }}" class="card my-3" style="width: 18rem;">
      <div>
        <img src="img/rendang.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title text-center">{{ $product_makanan->title }}</h4>
          <p class="card-text">{{ $product_makanan->description }}</p>
         <div class="text-center mb-1">
          <span class="fs-5">Rp{{ number_format($product_makanan->price, 0, ',', '.') }}</span>
        </div>
        </div>
      </div>
    </a>
@endforeach

  </div>
</div>

<div class="container menu mb-5" id="minuman">
  <h2 class="judul text-center fw-bold pb-1">Menu Minuman</h2>
<div class="menuKami row">

@foreach ($products_minuman as $product_minuman )
{{-- <a href="{{ url("menu/$product_minuman->id") }}" class="card my-3" style="width: 18rem;"> --}}
  <div class="card my-3" style="width: 18rem;">
    <img src="img/rendang.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title text-center">{{ $product_minuman ->title }}</h4>
      <p class="card-text">{{ $product_minuman ->description }}</p>
     <div class="text-center mb-1">
      <span class="fs-5">Rp{{ number_format($product_minuman->price, 0, ',', '.') }}</span>
    </div>
    </div>
  </div>
{{-- </a> --}}
@endforeach

  </div>
</div>

@section('js')
<script>
 function toggleTextAndRedirect() {
      const button = document.querySelector(".shortcut");
      const buttonText = button.innerHTML;
      const currentHref = window.location.href;
      const drink = document.querySelector(".bi-cup-straw");
      const food = document.querySelector(".bi-egg-fried");
      
      if (buttonText == "Menuju Menu Makanan") {
        button.innerHTML = "Menuju Menu Minuman";
        window.location.href = "#makanan";
      } else {
        button.innerHTML = "Menuju Menu Makanan";
        window.location.href = "#minuman";
      }
    }
</script>    
@endsection

@endsection