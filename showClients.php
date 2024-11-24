<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Clients</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Clients</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM clients");
        printf("<h3>Список клієнтів:</h3>");
        printf("<table><tr><th>ІД</th><th>Ім'я та прізвище</th><th>Номер телефону</th><th>Дата реєстрації</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['client_id'], $row['name'], $row['phone'], $row['registration_date']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a  href="searchClientForm.php">Пошук студента</a><br></li>
        <li><a  href="insertIntoClientsForm.php">Вставити рядок</a><br></li>
        <li><a  href="updateClientsForm.php">Змінити рядок</a><br></li>
        <li><a  href="deleteFromClientsForm.php">Видалити рядок</a><br></li>
        <li><a  href="showClientsPhotographerServices.php">Звіт Клієнт - Фотограф - Послуга</a><br></li> 
        <li><a  href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>