<?php
include "databaseConnect.php";

$photographer_id = $_POST['update_photographer_id'];
$name = $_POST['update_name'];
$specialization = $_POST['update_specialization'];
$phone = $_POST['update_phone'];

$stmt = $pdo->prepare("UPDATE PHOTOGRAPHERS SET name=:name, specialization=:specialization, phone=:phone WHERE photographer_id=:photographer_id");
$stmt->bindParam(':photographer_id', $photographer_id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':specialization', $specialization);
$stmt->bindParam(':phone', $phone);

if ($stmt->execute()) {
    echo "Фотограф оновлений успішно!";
} else {
    echo "Помилка оновлення фотографа.";
}

include("showPhotographers.php");
?>
