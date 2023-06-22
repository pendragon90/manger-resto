<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manger Resto</title>

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
    <!-- Bootstrap end -->

<!-- style -->
<link rel="stylesheet" href="css/daftar.css">
<link rel="stylesheet" href="css/style.css">
<!-- style end -->

</head>
<body>

    <div class="container form mt-5 w-50 mx-auto">
        <h2 class="fw-bold text-center pb-3">Daftar Akun Baru</h2>

        <form method="POST" action="register">
            @csrf
  <div class="mb-3">
    <div class="input-form mt-3">
        <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="name">
    </div>
    @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

    <div class="input-form mt-3">
        <label for="Email" class="form-label">Alamat Email</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
    </div>
    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif

<div class="input-form mt-3">
    <label for="Password" class="form-label">Sandi</label>
    <input type="password" class="form-control" id="Password" name="password">
</div>
    @if ($errors->has('password'))
    <span class="text-danger">{{ $errors->first('password') }}</span>
@endif

<div class="input-form mt-3">
    <label for="Password" class="form-label">Konfirmasi Sandi</label>
    <input type="password" class="form-control" id="Password" name="password_confirmation">
</div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <div class="daftar pt-3">
      <a href="../login/index.html">Kembali ke halaman login ?</a>
  </div>
</form>

    </div>

</body>
</html>