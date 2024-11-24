<?php
include "databaseConnect.php";

$session_id = $_POST['delete_session_id'];
$service_id = $_POST['delete_service_id'];

$stmt = $pdo->prepare("DELETE FROM photo_session_services WHERE session_id=:session_id AND service_id=:service_id");
$stmt->bindParam(':session_id', $session_id);
$stmt->bindParam(':service_id', $service_id);

if ($stmt->execute()) {
    echo "Послугу для фотосесії видалено успішно!";
} else {
    echo "Помилка видалення послуги для фотосесії.";
}

include("showPhotoSessionServices.php");
?>
