<?php

include "databaseConnect.php";

$name = $_POST['insert_name'];
$specialization = $_POST['insert_specialization'];
$phone = $_POST['insert_phone'];
$stmt = $pdo->prepare("INSERT INTO photographers (name, specialization, phone) VALUES (:name, :specialization, :phone)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':specialization', $specialization);
$stmt->bindParam(':phone', $phone);
if ($stmt->execute()) {
    echo "Фотограф доданий успішно!";
} else {
    echo "Помилка додавання фотографа.";
}


include("showPhotographers.php")
?>