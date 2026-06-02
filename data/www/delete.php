<?php
include "db.php";

if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: tabele.php");
    exit();
}

$id = (int)$_GET["id"];

$sql = "DELETE FROM Termin WHERE id_termin = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();

header("Location: tabele.php");
exit();
?>