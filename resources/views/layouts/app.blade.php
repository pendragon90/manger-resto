@php
    use Illuminate\Support\Facades\Auth;

    function cetak_nama() {
        $user = Auth::user();
        $name = $user->name;

        echo $name;
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

<!-- google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;1,300;1,700&display=swap" rel="stylesheet">
<!-- google fonts end -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
    <!-- Bootstrap end -->


    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- icons end -->
<!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- aos end -->

<!-- swiper js -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

@yield('css')
@yield('style')
</head>
<body>
    <!-- nav -->
<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><h2 class="fw-bold">MANGER RESTO</h2></a>
      <div class="shopping-cart d-small ms-5">
        <a href="/shopping">
          <i class="bi bi-cart"></i>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center d-flex align-items-center">
          <li class="nav-item">
            <a class="nav-link {{ ($title == '/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title == 'menu') ? 'active' : '' }}" aria-current="page" href="menu">Menu</a>
          </li>

          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'promo') ? 'active' : '' }}" href="promo">Promo</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'kontak') ? 'active' : '' }}" href="/#kontak">Kontak</a>
          </li>
          <div class="shopping-cart ms-5 d-none">
            <a href="/shopping">
            <i class="bi bi-cart"></i>
          </a>
          </div>
          <div>
            @if(Auth::check() && Auth::user()->role_id == 2)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ cetak_nama() }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="account">
                  <div class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>Account</a>
                  </div>
                </li>
                <li><a class="dropdown-item" href="logout">
                  <div class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right me-2" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>Logout</a>
                  </div>
                </li>
              </ul>
            </li>
            @elseif(Auth::check() && Auth::user()->role_id == 1)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ cetak_nama() }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tambah">
                  <div class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus-fill me-2" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
                    </svg>Tambah Product</a>
                  </div>
                </li>
                <li><a class="dropdown-item" href="account">
                  <div class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                      <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>Account</a>
                  </div>
                </li>
                <li><a class="dropdown-item" href="logout">
                  <div class="icon-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right me-2" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                      <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                    </svg>Logout</a>
                  </div>
                </li>
              </ul>
            </li>
              @else
              <a class="btn tombol ms-2" href="register">Register</a>
              <a class="btn tombol ms-2" href="login">Login</a>
            @endif
            
          </div>
        </ul>
      </div>
    </div>
  </nav>
  <!-- nav end -->

    @yield('content')

<!-- aos -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- aos end -->

<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/TextPlugin.min.js"></script>

@yield('gsap')
<!-- gsap end -->

<!-- swiper js start-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
  

@yield('js')

<!-- swiper js end -->

</body>
</html>