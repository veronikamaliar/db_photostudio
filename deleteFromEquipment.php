<?php
include "databaseConnect.php";

$equipment_id = $_POST['delete_equipment_id'];
$stmt = $pdo->prepare("DELETE FROM equipment WHERE equipment_id=:equipment_id");
$stmt->bindParam(':equipment_id', $equipment_id);

if ($stmt->execute()) {
    echo "Обладнання видалено успішно!";
} else {
    echo "Помилка видалення обладнання.";
}

include("showEquipment.php");
?>
