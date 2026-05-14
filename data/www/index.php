<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Domov - Friderik</title>
</head>
<body>
    <?php include 'header.php'; ?>

<section class="hero d-flex align-items-center">
  <div class="container naslov text-white text-center text-md-start px-3 px-md-5">
    <h1>NAJBOLJŠE PRIČESKE</h1>
    <h1>DALEČ NA</h1>
    <h1>OKOLI</h1>
    <p>Urejanje in striženje</p>
    <a href="narocanje.php" class="btn naroci-btn d-inline-block mt-3">NAROČI SE</a>
  </div>
</section>
<section class="py-3">
  <div class="container sivi-box text-center mx-3 mx-md-auto">
    <div>
      <h1>NAGRADE</h1>
      <h1>2026</h1>
      <p>Najboljši frizerski salon leta</p>
    </div>
  </div>
</section>
<section class="py-3">
  <div class="container sivi-box text-center mx-3 mx-md-auto">
    
    <h1 class="text-center mb-5">LOKACIJA</h1>

    <div class="row align-items-center text-center">

      <!-- LEVO -->
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <p>Koroška cesta 46</p>
        <p>2000 Maribor</p>
      </div>

      <!-- DESNO -->
      <div class="col-md-6 d-flex justify-content-center">
        <iframe 
          src="https://www.google.com/maps?q=Koroška+cesta+46,+Maribor&output=embed"
          width="100%" 
          height="400" 
          style="border:0; max-width: 400px;" 
          loading="lazy">
        </iframe>
      </div>

    </div>

  </div>
</section>

<section class="py-3">
  <div class="container sivi-box text-center mx-3 mx-md-auto">
    
    <h1 class="text-center mb-5">ZADOVOLJSTVO STRANK</h1>

    <div class="row text-center g-4 align-items-stretch">

      <div class="col-md-4">
        <div class="sivi-box-mnenje">
          <img src="slike/mnenje1.png" alt="profilna slika">
          <hr>
          <p>Morate izkusiti Friderika, tip je nor!!</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="sivi-box-mnenje">
          <img src="slike/mnenje2.png" alt="profilna slika">
          <hr>
          <p>Men je blo zelo všeč, moja pričeska je točno takšna kot sem si jo zamislila</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="sivi-box-mnenje">
          <img src="slike/mnenje3.png" alt="profilna slika">
          <hr>
          <p>Whatever.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>