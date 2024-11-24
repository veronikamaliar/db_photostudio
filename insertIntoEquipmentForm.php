<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showEquipment.php"; ?>

     <form method="POST" action="insertIntoEquipment.php">
        <input type="text" name="insert_name" placeholder="Назва обладнання" required>
        <input type="text" name="insert_equipment_condition" placeholder="Стан обладнання" required>
        <input type="number" name="insert_availability" placeholder="Доступність" required> 
        <input type="submit" value="Вставити">
    </form>

</body>
</html>
