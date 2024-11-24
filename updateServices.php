<?php
include "databaseConnect.php";

$services_id = $_POST['update_services_id'];
$name = $_POST['update_name'];
$price = $_POST['update_price'];
$description = $_POST['update_description'];

$stmt = $pdo->prepare("UPDATE services SET name=:name, price=:price, description=:description WHERE services_id=:services_id");
$stmt->bindParam(':services_id', $services_id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':description', $description);

if ($stmt->execute()) {
    echo "Послуга оновлена успішно!";
} else {
    echo "Помилка оновлення послуги.";
}

include("showServices.php");
?>
