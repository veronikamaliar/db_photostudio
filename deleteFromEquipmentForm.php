<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення обладнання</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showEquipment.php";
    ?>

    <form method="POST" action="deleteFromEquipment.php">
        <input type="text" name="delete_equipment_id" placeholder="ID обладнання для видалення" required>
        <input type="submit" value="Видалити обладнання">
    </form>
</body>
</html>
