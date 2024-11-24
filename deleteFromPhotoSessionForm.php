<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення фотосесії</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include "showPhotoSession.php";
    ?>

    <form method="POST" action="deleteFromPhotoSession.php">
        <input type="text" name="delete_session_id" placeholder="ID фотосесії для видалення" required>
        <input type="submit" value="Видалити фотосесію">
    </form>
</body>
</html>
