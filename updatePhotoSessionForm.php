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
    include "showPhotoSession.php";
    ?>

    <form method="POST" action="updatePhotoSession.php">
    <input type="text" name="update_session_id" placeholder="ID сесії" required>
    <input type="text" name="update_client_id" placeholder="ID клієнта" required>
    <input type="text" name="update_photographer_id" placeholder="ID фотографа" required>
    <input type="text" name="update_type" placeholder="Тип фотосесії" required>
    <input type="datetime-local" name="update_date_time" placeholder="Дата та час" required>
    <input type="text" name="update_duration" placeholder="Тривалість (години)" required>
    <input type="submit" value="Оновити фотосесію">
</form>



</body>

</html>