<?php
include "databaseConnect.php";

$session_id = $_POST['delete_session_id'];
$equipment_id = $_POST['delete_equipment_id'];

$stmt = $pdo->prepare("DELETE FROM photo_session_equipment WHERE session_id=:session_id AND equipment_id=:equipment_id");
$stmt->bindParam(':session_id', $session_id);
$stmt->bindParam(':equipment_id', $equipment_id);

if ($stmt->execute()) {
    echo "Обладнання для фотосесії видалено успішно!";
} else {
    echo "Помилка видалення обладнання для фотосесії.";
}

include("showPhotoSessionEquipment.php");
?>
