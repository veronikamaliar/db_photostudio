<?php

include "databaseConnect.php";

$client_id = $_POST['update_client_id'];
$name = $_POST['update_name'];
$phone = $_POST['update_phone'];
$registration_date = $_POST['update_registration_date'];
$stmt = $pdo->prepare("UPDATE clients SET name=:name, phone=:phone, registration_date=:registration_date  WHERE client_id=:client_id");
$stmt->bindParam(':client_id', $client_id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':registration_date', $registration_date);
if ($stmt->execute()) {
    echo "Клієнт оновлений успішно!";
} else {
    echo "Помилка оновлення клієнта.";
}


include("showClients.php")
?>
