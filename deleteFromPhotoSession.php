<?php
include "databaseConnect.php";

$session_id = $_POST['delete_session_id'];

$stmt = $pdo->prepare("DELETE FROM photo_session_services WHERE session_id = :session_id");
$stmt->bindParam(':session_id', $session_id);
if ($stmt->execute()) {
    echo "Послугу для фотосесії видалено успішно!";
} else {
    echo "Помилка видалення послуги для фотосесії.";
}

$stmt2 = $pdo->prepare("DELETE FROM photo_session WHERE session_id = :session_id");
$stmt2->bindParam(':session_id', $session_id);
if ($stmt2->execute()) {
    echo "Фотосесію видалено успішно!";
} else {
    echo "Помилка видалення фотосесії.";
}

include("showPhotoSession.php");
?>
