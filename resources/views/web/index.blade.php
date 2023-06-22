@extends('layouts/app')

@section('title', 'Manger Resto')

@section('css')
    <!-- style -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- style end -->
@endsection

@section('content')
<!-- hero -->
<div class="container-fluid awal">
    <div class="container hero pertama" id="home">
        <h2 class="textLapar fst-italic fw-bold"></span></h2>
        <h1 class="fw-bold">Jangan  Tunggu Lagi</h1>
        <p class="text-danger fs-5">Ayo pesan makanan sekarang</p>
        <div class="button-hero">
        <a class="tombol me-4" href="#Baru">Apa yang baru ?</a>
        </div>
    </div>

        <div class="container hero kedua text-wrap pt-5" data-aos="fade-right" data-aos-delay="100">
        <h2 class="s fst-italic fw-bold">"WAHH... Perutku lapar banget nihh"</h2>
        <h4 class="fw-bold">Yang doyan makan boleh dong kunjungi dibawah ini</h4>
        <a class="tombol" href="promo/index.html">Promo</a>
    </div>

</div>

<!-- hero end -->

<!-- svg -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2e3e5" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,138.7C384,117,480,107,576,112C672,117,768,139,864,149.3C960,160,1056,160,1152,149.3C1248,139,1344,117,1392,106.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<!-- svg end -->

<!-- konten apa yang baru -->
<div class="container Baru" id="Baru">
  <div class="yangBaru text-center">
    <h4 class="text-danger fst-italic">Apa yang baru ?</h4>
    <h2 class="fw-bold judul">KAMI SELALU MENGUTAMAKAN <br>KEBUTUHAN KONNSUMEN</h2>

    <div class="row justify-content-between mt-5 parent-card">
      <div class="card" style="width: 18rem" data-aos="fade-right" data-aos-delay="300">
  <div class="card body border-0">
    <h2 class="fw-bold">Pelayanan Yang Lebih Cepat</h2>
    <p class="text-justify">ini deskripsi Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, voluptatem.</p>
  </div>
</div>

      <div class="card" style="width: 18rem" data-aos="fade-up" data-aos-delay="300">
  <div class="card body mx-5 border-0">
    <h2 class="fw-bold">Rasa Baru</h2>
    <p class="text-justify">ini deskripsi Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab</p>
  </div>
</div>

      <div class="card" style="width: 18rem" data-aos="fade-right" data-aos-delay="300">
  <div class="card body border-0">
   <h2 class="fw-bold">Sensasi Baru</h2>
   <p class="text-justify">ini deskripsi Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, voluptatem.</p>
  </div>
</div>
    </div>
  </div>
</div>
<!-- konten apa yang baru end-->

{{-- <div class="kosong p-5"></div> --}}

<!-- trending -->
<div class="container trending">
  <h2 class="text-center judul fw-bold mb-2">APA YANG TRENDING<br>SAAT INI ?</h2>
  <h4 class="text-danger fst-italic text-center mb-4">Kami selalu mengupdate kesukaan para pelanggan</h4>
  <div class="row justify-content-center">

{{-- swiper start --}}
<div class="container mt-4">
  
  <div class="swiper-container swiper-trending">
    <div class="swiper-wrapper">
   {{-- slides start --}}
    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/rendang.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
       <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>

    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/telur.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
        <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>

    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/rendang.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
       <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>

    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/rendang.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
       <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>

    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/rendang.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
       <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>

    <div class="card swiper-slide" style="width: 18rem;">
      <img src="img/rendang.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title text-center">Mie</h4>
        <p class="card-text">Ini deskripsi Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, doloremque?</p>
       <div class="text-center mb-1">
        <span class="fs-5">Rp10.000</span>
      </div>
      </div>
    </div>
    {{-- slides end --}}
  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
</div>
  </div>
</div>
<!-- trending end -->

<!-- ulasan -->
<div class="container mb-5 ulasan">

<h2 class="text-center judul fw-bold pb-3">Ulasan Para Konsumen</h2>

<div class="container mt-4">
  <div class="swiper-container swiper-ulasan">
    <div class="swiper-wrapper">

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>

        <div class="heroFigure swiper-slide">
          <figure class="text-end p-4 w-auto">
            <div class="gambar text-center">
              <img src="img/orang.jpg" class="rounded-circle mb-4 shadow-2" alt="woman avatar" width="90" height="90">
            </div>
            <h2 class="text-center">John</h2>
              <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus odio obcaecati consectetur numquam et molestiae nesciunt doloremque rem, reiciendis necessitatibus.</p>
          </figure>
      </div>
        
    </div>
    <div class="swiper-pagination mb-3"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>

  <div class="text-center">
    <a href="ulasan" class="btn tombol">Ulasan Selengkapnya</a>
  </div>

  </div>
<!-- ulasan end -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2e3e5" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,165.3C384,192,480,224,576,240C672,256,768,256,864,256C960,256,1056,256,1152,240C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  
  <!-- footer -->
  <div class="footer" id="kontak">
  <div class="container pt-5">
  
      <div class="kiri">
        <h4 class="fw-bold">Kontak Kami</h4>
        <h5 class="fst-italic">Kami siap melayani anda !</h5>
        <p class="fs-5">Restoran Manger Resto telah berdiri sejak tahun 2015 hingga saat ini. Kami bergerak dibidang mengelola makanan dan minuman ala restoran</p>
      </div>
  
      <div class="kanan">
        <h4 class="fw-bold">Lokasi</h4>
        <p>Jl. Raya Tahunan - Batealit, Jepara</p>
        <h4 class="fw-bold">Waktu Buka</h4>
        <p>Buka setiap hari</p>
        <p>Jam 10:00-21:00 WIB</p>
      </div>
  
      <div class="logo-kontak">
        <a href="https://wa.me/628995864905" target="_blank"><i class="bi bi-whatsapp"></i></a>
        <a href="dll/index.html"><i class="bi bi-facebook"></i></a>
        <a href="dll/index.html"><i class="bi bi-instagram"></i></a>
      </div>
  
    </div>
    <div class="copyright text-center pb-3 pt-3">
                  <p>Created by <b>Daffa Fahrizal</b> | &copy; 2023.</p>
      </div>
  </div>
<!-- footer end -->

@section('js')
<script src="js/script.js"></script>
@endsection

@endsection