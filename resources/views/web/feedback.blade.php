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
    <title>Feedback</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap end -->


    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- icons end -->
<!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<!-- aos end -->

<!-- style -->
<link rel="stylesheet" href="css/daftar.css">
<link rel="stylesheet" href="css/style.css">
<!-- style end -->

</head>
<body>

    <div class="container form mt-5 w-50 mx-auto">
        <h2 class="fw-bold text-center pb-3">Feedback</h2>
        <p class="text-center fst-italic text-danger fs-5">Berikan kritik dan saran agar saya lebih berkembang lagi</p>
        <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
  <strong>Terima kasih atas pesan dan kritiknya!</strong> Pesan anda akan segera saya baca nanti.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <form name="submit-to-google-sheet">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="NAMA" placeholder="Nama kamu">
    
        <label for="floatingTextarea" class="form-label pt-3">Pesan</label>
  <textarea class="form-control" id="floatingTextarea" placeholder="Tinggalkan pesan " name="PESAN"></textarea>

  </div>
  <button type="submit" class="btn btn-primary kirim">Submit</button>
  <button class="btn btn-primary d-none loading" type="button" disabled>
  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button>
  <div class="daftar pt-3">
      <a href="../index.html">Kembali ke home ?</a>
  </div>
</form>
    </div>


    <!-- feedback -->
    <script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzEk37KfsX21wYf0XvVHsYeCNhCpvsgE1W9TgV4vuCpL89Xm6VIhYy0t54-o_Jd5qxLUA/exec'
  const form = document.forms['submit-to-google-sheet']
const btnKirim = document.querySelector('.kirim');
const btnLoading = document.querySelector('.loading');
const alert = document.querySelector('.alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
    // ketika submit dikllik
    // tampil loading
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    alert.classList.toggle('d-none');
    form.reset()
        console.log('Success!', response)
    })
      .catch(error => console.error('Error!', error.message))
  });


</script>
    <!-- feedback end -->
</body>
</html>