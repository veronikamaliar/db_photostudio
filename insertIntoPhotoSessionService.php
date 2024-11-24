<?php
include "databaseConnect.php";

$session_id = $_POST['insert_session_id'];
$services_id = $_POST['insert_services_id'];

$checkPhoto_sessionStmt = $pdo->prepare("SELECT * FROM photo_session WHERE session_id = :session_id");
$checkPhoto_sessionStmt->bindParam(':session_id', $session_id);
$checkPhoto_sessionStmt->execute();

if ($checkPhoto_sessionStmt->rowCount() == 0) {
    die("Фотосесії з ID $session_id не існує. Будь ласка, спочатку додайте фотосесію.");
}

$checkServicesStmt = $pdo->prepare("SELECT * FROM services WHERE services_id = :services_id");
$checkServicesStmt->bindParam(':services_id', $services_id);
$checkServicesStmt->execute();

if ($checkServicesStmt->rowCount() == 0) {
    die("Послуги з ID $services_id не існує. Будь ласка, спочатку додайте послугу.");
}

$stmt = $pdo->prepare("INSERT INTO photo_session_services (session_id, service_id) VALUES (:session_id, :services_id)");
$stmt->bindParam(':session_id', $session_id);
$stmt->bindParam(':services_id', $services_id);

if ($stmt->execute()) {
    echo "Послуга для фотосесії додана успішно!";
} else {
    echo "Помилка додавання послуги для фотосесії.";
}

include("showPhotoSessionServices.php");
?>
