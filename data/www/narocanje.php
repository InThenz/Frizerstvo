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
    <title>Naročanje - Friderik</title>
</head>
<body>
    <?php include 'header.php'; ?>

<section class="py-3">
  <div class="container sivi-box text-center mx-3 mx-md-auto">

    <h1>NAROČANJE</h1>

    <!-- FORM START -->
    <form action="db.php" method="POST">

      <!-- DATUM IN ČAS -->
      <div class="row justify-content-center mt-4">

        <div class="col-md-6 text-start">

          <label class="form-label">
            Izberite datum in čas
          </label>

          <input type="date" name="datum" class="form-control rounded-0" required>
          <input type="time" name="cas" class="form-control rounded-0" required>
        </div>

      </div>

      <!-- OSEBNI PODATKI -->
      <div class="row justify-content-center mt-4">

        <div class="col-md-8">

          <!-- IME -->
          <div class="mb-4 text-start">
            <label class="form-label">Naziv</label>

            <input type="text"
                   name="naziv"
                   class="form-control"
                   placeholder="Vnesite ime ali naziv"
                   required>
          </div>

          <!-- EMAIL -->
          <div class="mb-4 text-start">
            <label class="form-label">Email</label>

            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Vnesite email"
                   required>
          </div>

          <!-- OPOMBA -->
          <div class="mb-4 text-start">
            <label class="form-label">Opomba</label>

            <textarea name="opomba"
                      class="form-control"
                      rows="4"
                      placeholder="Dodatne želje ali opombe"></textarea>
          </div>

        </div>

      </div>


      <!-- IZBIRA FRIZERJA -->
      <div class="row justify-content-center mt-4">

        <div class="col-md-4">

          <label class="form-label">
            Izberite frizerja
          </label>

          <select name="frizer_ime"
                  class="form-select"
                  required>

            <option value="">
              Izberite...
            </option>

            <option value="Jure">
              Jure
            </option>

            <option value="Anja">
              Anja
            </option>

          </select>

        </div>


      </div>

      <div class="row justify-content-center mt-4">

        <div class="col-md-4">

          <label class="form-label">
            Izberite spol
          </label>

          <select name="frizer_spol"
                  class="form-select"
                  required>

            <option value="">
              Izberite...
            </option>

            <option value="Moški">
              Moški
            </option>

            <option value="Ženska">
              Ženska
            </option>

          </select>

        </div>
        

      </div>

      <div class="row justify-content-center mt-4">

        <div class="col-md-4">

          <label class="form-label">
            Izberite specializacijo
          </label>

          <select name="frizer_specializacija"
                  class="form-select"
                  required>

            <option value="">
              Izberite...
            </option>

            <option value="Moško striženje">
              Moško striženje
            </option>

            <option value="Žensko striženje">
              Žensko striženje
            </option>

          </select>

        </div>
        

      </div>



      <!-- SUBMIT -->
      <div class="mt-5">

        <button type="submit"
                class="btn naroci-btn">
          NAROČI SE
        </button>

      </div>

    </form>
    <!-- FORM END -->

  </div>
</section>

<section class="container">
  <h2>Storitve</h2>

  <?php 
    $sql_termin = "SELECT * FROM Termin";
    $stmt = $conn->query($sql_termin);
    $podatki_termin = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table>
    <thead>id</thead>
    <thead>Datum</thead>
    <thead>Čas</thead>

    <tbody>
      <?php 
        foreach($podatki_termin as $row) {
          ?>

          <tr> 
            <td> <?= htmlspecialchars($row["id_termin"]); ?> </td>
            <td> <?= htmlspecialchars($row["datum"]); ?> </td>
            <td> <?= htmlspecialchars($row["cas"]); ?> </td>
          </tr>

        <?php 
          }
        ?>
 </table>

</section>

<section class="container">
  <h2>Podatki</h2>

  <?php 
    $sql = "SELECT * FROM Uporabnik";
    $stmt = $conn->query($sql);
    $podatki = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table>
    <thead>id</thead>
    <thead>naziv</thead>
    <thead>email</thead>
    <thead>opomba</thead>

    <tbody>
      <?php 
        foreach($podatki as $row) {
          ?>

          <tr> 
            <td> <?= htmlspecialchars($row["id_uporabnik"]); ?> </td>
            <td> <?= htmlspecialchars($row["Naziv"]); ?> </td>
            <td> <?= htmlspecialchars($row["email"]); ?> </td>
            <td> <?= htmlspecialchars($row["Opomba"]); ?> </td>
          </tr>

        <?php 
          }
        ?>
 </table>

</section>


<section class="container">
  <h2>Podatki</h2>

  <?php 
    $sql = "SELECT * FROM Frizer";
    $stmt = $conn->query($sql);
    $podatki_frizer = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table>
    <thead>id</thead>
    <thead>Ime</thead>
    <thead>Spol</thead>
    <thead>Specializacija</thead>

    <tbody>
      <?php 
        foreach($podatki_frizer as $row) {
          ?>

          <tr> 
            <td> <?= htmlspecialchars($row["id_frizer"]); ?> </td>
            <td> <?= htmlspecialchars($row["ime"]); ?> </td>
            <td> <?= htmlspecialchars($row["spol"]); ?> </td>
            <td> <?= htmlspecialchars($row["Specializacija"]); ?> </td>
          </tr>

        <?php 
          }
        ?>
 </table>

</section>



<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>