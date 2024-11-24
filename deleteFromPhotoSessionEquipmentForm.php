<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення обладнання для фотосесії</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showPhotoSessionEquipment.php";
    ?>

    <form method="POST" action="deleteFromPhotoSessionEquipment.php">
        <input type="text" name="delete_session_id" placeholder="ID фотосесії" required>
        <input type="text" name="delete_equipment_id" placeholder="ID обладнання" required>
        <input type="submit" value="Видалити обладнання">
    </form>
</body>
</html>
