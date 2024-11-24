<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showPhotoSessionServices.php"; ?>

    <form method="POST" action="insertIntoPhotoSessionService.php">
        <input type="text" name="insert_session_id" placeholder="ID сесії" required>
        <input type="text" name="insert_services_id" placeholder="ID послуги" required>
        <input type="submit" name="insert" value="Додати послугу">
    </form>

</body>
</html>
