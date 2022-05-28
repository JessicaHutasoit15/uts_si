<!doctype html>
<html lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">HOTEL PRIMA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="<?= base_url(); ?>">Home</a> 
        <a class="nav-link" href="<?= base_url(); ?>pelanggan">Data Kamar</a>

      </div>
    </div>
  </div>
</nav>
<div class="card">
  <img src="img/hotel.jpg" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Keterangan</h5>
    <p class="card-text">Ramah Harga, Bersih, Nyaman, dan Letak Strategis  :)</p>
  </div>
</div>
