<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення послуги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showServices.php";
    ?>

    <form method="POST" action="deleteFromServices.php">
        <input type="text" name="delete_services_id" placeholder="ID послуги для видалення" required>
        <input type="submit" value="Видалити послугу">
    </form>
</body>
</html>
