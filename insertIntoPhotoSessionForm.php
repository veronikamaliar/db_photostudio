<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showPhotoSession.php"; ?>

    <form method="POST" action="insertIntoPhotoSession.php">
    <input type="text" name="insert_client_id" placeholder="ID клієнта" required>
    <input type="text" name="insert_photographer_id" placeholder="ID фотографа" required>
    <input type="text" name="insert_type" placeholder="Тип фотосесії" required>
    <input type="datetime-local" name="insert_date_time" placeholder="Дата та час" required>
    <input type="text" name="insert_duration" placeholder="Тривалість (години)" required>
    <input type="submit" name="insert" value="Додати фотосесію">
</form>



</body>
</html>