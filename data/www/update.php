<?php
include "db.php";

if (!isset($_POST["id_termin"])) {
    header("Location: tabele.php");
    exit();
}

$id_termin = (int) $_POST["id_termin"];
$datum = $_POST["datum"];
$cas = $_POST["cas"];

$sql = "UPDATE Termin 
        SET datum = :datum,
            cas = :cas
        WHERE id_termin = :id_termin";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":datum", $datum);
$stmt->bindParam(":cas", $cas);
$stmt->bindParam(":id_termin", $id_termin, PDO::PARAM_INT);

$stmt->execute();

header("Location: tabele.php");
exit();
?>
