<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Photographers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Photographers</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM photographers");
        printf("<h3>Список фотографів:</h3>");
        printf("<table><tr><th>ІД</th><th>Ім'я</th><th>Спеціалізація</th><th>Номер телефону</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['photographer_id'], $row['name'], $row['specialization'], $row['phone']);
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="searchPhotographerForm.php">Пошук фотографа</a><br></li>
        <li><a href="insertIntoPhotographerForm.php">Вставити рядок</a><br></li>
        <li><a href="updatePhotographersForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromPhotographersForm.php">Видалити рядок</a><br></li>
        <li><a  href="showClientsPhotographerServices.php">Звіт Клієнт - Фотограф - Послуга</a><br></li> 
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
