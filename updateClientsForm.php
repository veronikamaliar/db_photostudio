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
    include "showClients.php";
    ?>

    <form method="POST" action="updateClients.php">
    <input type="text" name="update_client_id" placeholder="ID клієнта">
    <input type="text" name="update_name" placeholder="Ім'я клієнта" required>
    <input type="text" name="update_phone" placeholder="Телефон клієнта" required>
    <input type="date" name="update_registration_date" placeholder="Дата реєстрації" required>
    <input type="submit" value="Оновити клієнта">
</form>

</body>

</html>