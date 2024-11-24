<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення послуги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showServices.php";
    ?>

    <form method="POST" action="updateServices.php">
        <input type="text" name="update_services_id" placeholder="ID послуги" required>
        <input type="text" name="update_name" placeholder="Назва послуги" required>
        <input type="number" name="update_price" placeholder="Ціна послуги" required>
        <input type="text" name="update_description" placeholder="Опис послуги" required></textarea>
        <input type="submit" value="Оновити послугу">
    </form>
</body>
</html>
