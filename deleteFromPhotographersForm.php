<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення фотографа</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showPhotographers.php";
    ?>

    <form method="POST" action="deleteFromPhotographers.php">
        <input type="text" name="delete_photographer_id" placeholder="ID фотографа для видалення" required>
        <input type="submit" value="Видалити фотографа">
    </form>
</body>
</html>
