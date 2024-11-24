<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showPhotographers.php";
    ?>

    <form method="POST" action="updatePhotographer.php">
    <input type="text" name="update_photographer_id" placeholder="ID фотографа" required>
    <input type="text" name="update_name" placeholder="Ім'я фотографа" required>
    <input type="text" name="update_specialization" placeholder="Спеціалізація">
    <input type="text" name="update_phone" placeholder="Телефон фотографа" required>
    <input type="submit" value="Оновити фотографа">
</form>


</body>

</html>