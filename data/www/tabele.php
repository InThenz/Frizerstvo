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

<section class="container">
  <h2>Storitve</h2>

  <?php 
    $sql_termin = "SELECT * FROM Termin";
    $stmt = $conn->query($sql_termin);
    $podatki_termin = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Datum</th>
        <th scope="col">Čas</th>
      </tr>
    </thead>
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

  <table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">naziv</th>
            <th scope="col">email</th>
            <th scope="col">opomba</th>
        </tr>
    </thead>
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
  <h2>Frizerji</h2>

  <?php 
    $sql = "SELECT * FROM Frizer";
    $stmt = $conn->query($sql);
    $podatki_frizer = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Ime</th>
        <th scope="col">Spol</th>
        <th scope="col">Specializacija</th>
      </tr>
    </thead>
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