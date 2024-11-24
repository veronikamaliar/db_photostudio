<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних в обладнання сесії</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showPhotoSessionEquipment.php"; ?>

    <form method="POST" action="insertIntoPhotoSessionEquipment.php">
        <input type="text" id="insert_session_id" name="insert_session_id" placeholder="Введіть ID фотосесії" required>
        <input type="text" id="insert_equipment_id" name="insert_equipment_id" placeholder="Введіть ID обладнання" required>
        <input type="submit" name="insert" value="Додати обладнання">
    </form>

</body>
</html>
