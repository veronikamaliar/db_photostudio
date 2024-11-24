<?php
include "databaseConnect.php";

if (isset($_POST['insert_name'], $_POST['insert_equipment_condition'], $_POST['insert_availability'])) {
    $name = $_POST['insert_name'];
    $equipment_condition = $_POST['insert_equipment_condition'];
    $availability = $_POST['insert_availability'];

    try {
        $stmt = $pdo->prepare("INSERT INTO equipment (name, equipment_condition, availability) VALUES (:name, :equipment_condition, :availability)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':equipment_condition', $equipment_condition);
        $stmt->bindParam(':availability', $availability);

        if ($stmt->execute()) {
            echo "Обладнання додане успішно!";
        } else {
            echo "Помилка додавання обладнання.";
        }
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
} else {
    echo "Будь ласка, заповніть всі поля.";
}

include("showEquipment.php");
?>
