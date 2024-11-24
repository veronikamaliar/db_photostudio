<?php

include "databaseConnect.php";

$client_id = $_POST['insert_client_id'];
$checkClientStmt = $pdo->prepare("SELECT * FROM clients WHERE client_id = :client_id");
$checkClientStmt->bindParam(':client_id', $client_id);
$checkClientStmt->execute();

if ($checkClientStmt->rowCount() == 0) {
    die("Клієнт з ID $client_id не існує. Будь ласка, спочатку додайте клієнта.");
}
$photographer_id = $_POST['insert_photographer_id'];

$checkPhotographerStmt = $pdo->prepare("SELECT * FROM photographers WHERE photographer_id = :photographer_id");
$checkPhotographerStmt->bindParam(':photographer_id', $photographer_id);
$checkPhotographerStmt->execute();

if ($checkPhotographerStmt->rowCount() == 0) {
    die("Фотограф з ID $photographer_id не існує. Будь ласка, спочатку додайте фотографа.");
}
$type = $_POST['insert_type'];
$date_time = $_POST['insert_date_time'];
$duration = $_POST['insert_duration'];
$stmt = $pdo->prepare("INSERT INTO photo_session (client_id, photographer_id, type, date_time, duration) VALUES (:client_id, :photographer_id, :type, :date_time, :duration)");
$stmt->bindParam(':client_id', $client_id);
$stmt->bindParam(':photographer_id', $photographer_id);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':date_time', $date_time);
$stmt->bindParam(':duration', $duration);
if ($stmt->execute()) {
    echo "Фотосесія додана успішно!";
} else {
    echo "Помилка додавання фотосесії.";
}



include("showPhotoSession.php");
?>
