<?php
include "databaseConnect.php";

$equipment_id = $_POST['update_equipment_id'];
$name = $_POST['update_name'];
$availability = $_POST['update_availability'];
$equipment_condition = $_POST['update_equipment_condition'];

$stmt = $pdo->prepare("UPDATE equipment SET name=:name, availability=:availability, equipment_condition=:equipment_condition WHERE equipment_id=:equipment_id");
$stmt->bindParam(':equipment_id', $equipment_id);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':availability', $availability);
$stmt->bindParam(':equipment_condition', $equipment_condition);

if ($stmt->execute()) {
    echo "Обладнання оновлено успішно!";
} else {
    echo "Помилка оновлення обладнання.";
}

include("showEquipment.php");
?>
