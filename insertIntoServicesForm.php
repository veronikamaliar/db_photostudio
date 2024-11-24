<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showServices.php"; ?>

    <form method="POST" action="insertIntoServices.php">
    <input type="text" name="insert_name" placeholder="Назва послуги" required>
    <input type="text" name="insert_price" placeholder="Ціна" required>
    <input type="text" name="insert_description" placeholder="Опис"></textarea>
    <input type="submit" name="insert" value="Додати послугу">
</form>


</body>
</html>