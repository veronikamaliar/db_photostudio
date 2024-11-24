<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "showClients.php"; ?>

    <form method="POST" action="insertIntoClients.php">
    <input type="text" name="insert_name" placeholder="Ім'я клієнта" required>
    <input type="text" name="insert_phone" placeholder="Телефон клієнта" required>
    <input type="date" name="insert_registration_date" placeholder="Дата реєстрації" required>
    <input type="submit" name="insert" value="Додати клієнта">
</form>


</body>
</html>
