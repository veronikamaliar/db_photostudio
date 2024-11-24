<?php
include "databaseConnect.php";

$session_id = $_POST['update_session_id'];
$client_id = $_POST['update_client_id'];
$photographer_id = $_POST['update_photographer_id'];
$type = $_POST['update_type'];
$date_time = $_POST['update_date_time'];
$duration = $_POST['update_duration'];

$stmt = $pdo->prepare("UPDATE PHOTO_SESSION SET client_id=:client_id, photographer_id=:photographer_id, type=:type, date_time=:date_time, duration=:duration WHERE session_id=:session_id");
$stmt->bindParam(':session_id', $session_id);
$stmt->bindParam(':client_id', $client_id);
$stmt->bindParam(':photographer_id', $photographer_id);
$stmt->bindParam(':type', $type);
$stmt->bindParam(':date_time', $date_time);
$stmt->bindParam(':duration', $duration);

if ($stmt->execute()) {
    echo "Фотосесія оновлена успішно!";
} else {
    echo "Помилка оновлення фотосесії.";
}

include("showPhotoSession.php");
?>
