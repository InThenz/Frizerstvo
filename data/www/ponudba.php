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

<main class="container py-5">

    <!-- TITLE -->
    <div class="text-center mb-5">
        <h1 class="display-2 fw-bold">
            NAŠA <br>
            <span class="text-warning">PONUDBA</span>
        </h1>

        <hr class="w-75 mx-auto">
    </div>

    <div class="row justify-content-center">

        <!-- LEFT SIDE BUTTONS -->
        <div class="col-md-3 mb-4">

            <div class="nav flex-column nav-pills gap-3" id="v-pills-tab" role="tablist">

                <button class="btn btn-outline-dark active"
                    id="moski-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#moski"
                    type="button">

                    Moško striženje
                </button>

                <button class="btn btn-outline-dark"
                    id="zenski-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#zenski"
                    type="button">

                    Žensko striženje
                </button>

                <button class="btn btn-outline-dark"
                    id="otroski-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#otroski"
                    type="button">

                    Otroško striženje
                </button>

            </div>

        </div>

        <!-- RIGHT SIDE CONTENT -->
        <div class="col-md-5">

            <div class="tab-content border p-4 min-vh-50">

                <!-- MEN -->
                <div class="tab-pane fade show active"
                    id="moski">

                    <p class="fw-bold">
                        Striženje kratkih las
                        <span class="float-end">20 eur</span>
                    </p>

                    <p class="fw-bold">
                        Fade haircut
                        <span class="float-end">25 eur</span>
                    </p>

                    <p class="fw-bold">
                        Striženje s strojem
                        <span class="float-end">15 eur</span>
                    </p>

                </div>

                <!-- WOMEN -->
                <div class="tab-pane fade"
                    id="zenski">

                    <p class="fw-bold">
                        Striženje dolgih las
                        <span class="float-end">30 eur</span>
                    </p>

                    <p class="fw-bold">
                        Fen frizura
                        <span class="float-end">18 eur</span>
                    </p>

                    <p class="fw-bold">
                        Barvanje las
                        <span class="float-end">50 eur</span>
                    </p>

                </div>

                <!-- KIDS -->
                <div class="tab-pane fade"
                    id="otroski">

                    <p class="fw-bold">
                        Otroško striženje
                        <span class="float-end">12 eur</span>
                    </p>

                    <p class="fw-bold">
                        Styling
                        <span class="float-end">5 eur</span>
                    </p>

                </div>

            </div>

        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include 'footer.php'; ?>

</body>
</html>
