<?php
include "databaseConnect.php";

$session_id = $_POST['insert_session_id'];
$equipment_id = $_POST['insert_equipment_id'];

$checkPhoto_sessionStmt = $pdo->prepare("SELECT * FROM photo_session WHERE session_id = :session_id");
$checkPhoto_sessionStmt->bindParam(':session_id', $session_id);
$checkPhoto_sessionStmt->execute();

if ($checkPhoto_sessionStmt->rowCount() == 0) {
    die("Фотосесії з ID $session_id не існує. Будь ласка, спочатку додайте фотосесію.");
}

$checkEquipmentStmt = $pdo->prepare("SELECT * FROM equipment WHERE equipment_id = :equipment_id");
$checkEquipmentStmt->bindParam(':equipment_id', $equipment_id);
$checkEquipmentStmt->execute();

if ($checkEquipmentStmt->rowCount() == 0) {
    die("Обладнання з ID $equipment_id не існує. Будь ласка, спочатку додайте обладнання.");
}

$stmt = $pdo->prepare("INSERT INTO photo_session_equipment (session_id, equipment_id) VALUES (:session_id, :equipment_id)");
$stmt->bindParam(':session_id', $session_id);
$stmt->bindParam(':equipment_id', $equipment_id);

if ($stmt->execute()) {
    echo "Обладнання для фотосесії додано успішно!";
} else {
    echo "Помилка додавання обладнання для фотосесії.";
}

include("showPhotoSessionEquipment.php");
?>
