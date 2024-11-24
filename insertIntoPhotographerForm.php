<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showPhotographers.php"; ?>

    <form method="POST" action="insertIntoPhotographer.php">
    <input type="text" name="insert_name" placeholder="Ім'я фотографа" required>
    <input type="text" name="insert_specialization" placeholder="Спеціалізація" required>
    <input type="int" name="insert_phone" placeholder="Номер телефону" required>
    <input type="submit" name="insert" value="Додати фотографа">
</form>


</body>
</html>
