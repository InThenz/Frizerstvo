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
    <form action="shrani_termin.php" method="POST">

          <!-- KOLEDAR -->
      <div class="calendar-box mx-auto mt-5">

        <div class="d-flex justify-content-between align-items-center mb-3">

          <button type="button"
                  id="prevMonth"
                  class="drugi-gumb">
            ←
          </button>

          <h2 id="monthYear"></h2>

          <button type="button"
                  id="nextMonth"
                  class="drugi-gumb">
            →
          </button>

        </div>

        <hr>

        <div id="calendar"
             class="d-grid calendar-grid">
        </div>

      </div>

      <!-- IZBIRA ČASA -->
      <div id="timeSelect"
           class="mt-4 d-none">

        <h4>Izberite čas</h4>

        <div class="d-flex justify-content-center gap-2 flex-wrap">

          <button type="button"
                  class="drugi-gumb time-btn">
            10:00
          </button>

          <button type="button"
                  class="drugi-gumb time-btn">
            11:00
          </button>

          <button type="button"
                  class="drugi-gumb time-btn">
            12:00
          </button>

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

      <!-- SKRITI INPUTI -->
      <input type="hidden" name="datum" id="selectedDate">
      <input type="hidden" name="cas" id="selectedTime">

      <!-- IZBIRA FRIZERJA -->
      <div class="row justify-content-center mt-4">

        <div class="col-md-4">

          <label class="form-label">
            Izberite frizerja
          </label>

          <select name="frizer"
                  class="form-select"
                  required>

            <option value="">
              Izberite...
            </option>

            <option value="1">
              Moško striženje
            </option>

            <option value="2">
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

<?php include 'footer.php'; ?>
<script src="koledar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>