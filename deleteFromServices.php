<?php
include "databaseConnect.php";

$services_id = $_POST['delete_services_id'];
$stmt = $pdo->prepare("DELETE FROM services WHERE services_id=:services_id");
$stmt->bindParam(':services_id', $services_id);

if ($stmt->execute()) {
    echo "Послугу видалено успішно!";
} else {
    echo "Помилка видалення послуги.";
}

include("showServices.php");
?>
