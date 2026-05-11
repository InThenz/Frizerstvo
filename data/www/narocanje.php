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
    <title>Frizerstvo Friderik</title>
</head>
<body>
    <?php include 'header.php'; ?>

<section class="py-3">
  <div class="container sivi-box text-center mx-3 mx-md-auto">

    <h1>NAROČANJE</h1>

    <div class="calendar-box mx-auto mt-4">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <button id="prevMonth" class="drugi-gumb">←</button>
        <h2 id="monthYear"></h2>
        <button id="nextMonth" class="drugi-gumb">→</button>
      </div>

      <hr>

      <div id="calendar" class="d-grid calendar-grid"></div>

    </div>

    <div id="timeSelect" class="mt-4 d-none">
      <h4>Izberite čas</h4>
      <div class="d-flex justify-content-center gap-2">
        <button class="drugi-gumb time-btn">10:00</button>
        <button class="drugi-gumb time-btn">11:00</button>
        <button class="drugi-gumb time-btn">12:00</button>
      </div>
    </div>

    <button class="btn naroci-btn mt-4">NAROČI SE</button>

  </div>
</section>

<?php include 'footer.php'; ?>
<script src="koledar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>