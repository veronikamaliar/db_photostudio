<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення обладнання</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showEquipment.php";
    ?>

    <form method="POST" action="updateEquipment.php">
        <input type="text" name="update_equipment_id" placeholder="ID обладнання" required>
        <input type="text" name="update_name" placeholder="Назва обладнання" required>
        <input type="number" name="update_availability" placeholder="Доступність (1 = так, 0 = ні)" required>
        <input type="text" name="update_equipment_condition" placeholder="Стан обладнання" required>
        <input type="submit" value="Оновити обладнання">
    </form>
</body>
</html>
