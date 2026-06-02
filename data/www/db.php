<?php
$servername = "podatkovna-baza";
$username = "root";
$password = "superVarnoGeslo";
$dbname = "testna_baza";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Povezano s podatkovno bazo!";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


/* tu je vsa logika za vstavljanje podatkov v bazo */

if($_SERVER["REQUEST_METHOD"] == "POST"){

$naziv = $_POST["naziv"];
$email = $_POST["email"];
$opomba = $_POST["opomba"];

$frizer_ime = $_POST["frizer_ime"];
$frizer_spol = $_POST["frizer_spol"];
$frizer_specializacija = $_POST["frizer_specializacija"];

$datum = $_POST["datum"];
$cas = $_POST["cas"];

$sql = "INSERT INTO Uporabnik (naziv, email, opomba) VALUES (:naziv, :email, :opomba)";

$sql_frizer = "INSERT INTO Frizer (ime, spol, specializacija) VALUES (:frizer_ime, :frizer_spol, :frizer_specializacija)";

$sql_termin = "INSERT INTO Termin (datum, cas) VALUES (:datum, :cas)";

$stmt = $conn->prepare($sql);
$stmt->execute([
  ":naziv" => $naziv,
  ":email" => $email,
  ":opomba" => $opomba,
]);

$stmt_frizer = $conn->prepare($sql_frizer);
$stmt_frizer->execute([
    ":frizer_ime" => $frizer_ime,
    ":frizer_spol" => $frizer_spol,
    ":frizer_specializacija" => $frizer_specializacija
]);

$stmt_termin = $conn->prepare($sql_termin);
$stmt_termin->execute([
    ":datum" => $datum,
    ":cas" => $cas
]);

/*
echo "Podatki so bili uspešno poslani!";


}else {
  echo "Ni prišlo do pošiljanja podatkov.";
}
*/
}
?>
