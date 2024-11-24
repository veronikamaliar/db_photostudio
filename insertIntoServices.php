<?php

include "databaseConnect.php";

$name = $_POST['insert_name'];
$price = $_POST['insert_price'];
$description = $_POST['insert_description'];
$stmt = $pdo->prepare("INSERT INTO services (name, price, description) VALUES (:name, :price, :description)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':description', $description);
if ($stmt->execute()) {
    echo "Послуга додана успішно!";
} else {
    echo "Помилка додавання послуги.";
}

include("showServices.php");
?>

