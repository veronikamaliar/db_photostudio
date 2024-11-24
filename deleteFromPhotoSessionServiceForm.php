<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення послуги для фотосесії</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showPhotoSessionServices.php";
    ?>

    <form method="POST" action="deleteFromPhotoSessionServices.php">
        <input type="text" name="delete_session_id" placeholder="ID фотосесії" required>
        <input type="text" name="delete_service_id" placeholder="ID послуги" required>
        <input type="submit" value="Видалити послугу">
    </form>
</body>
</html>
