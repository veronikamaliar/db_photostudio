<?php
include "databaseConnect.php";

$photographer_id = $_POST['delete_photographer_id'];
$stmt = $pdo->prepare("DELETE FROM photographers WHERE photographer_id=:photographer_id");
$stmt->bindParam(':photographer_id', $photographer_id);

if ($stmt->execute()) {
    echo "Фотограф видалений успішно!";
} else {
    echo "Помилка видалення фотографа.";
}

include("showPhotographers.php");
?>
