<?php

include "databaseConnect.php";

$name = $_POST['insert_name'];
$phone = $_POST['insert_phone'];
$registration_date = $_POST['insert_registration_date'];
$stmt = $pdo->prepare("INSERT INTO clients (name, phone, registration_date) VALUES (:name, :phone, :registration_date)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':registration_date', $registration_date);
if ($stmt->execute()) {
    echo "Клієнт доданий успішно!";
} else {
    echo "Помилка додавання клієнта.";
}


include("showClients.php")
?>