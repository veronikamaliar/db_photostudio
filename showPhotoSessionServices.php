<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Photo Session Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Photo Session Services</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM photo_session_services");
        printf("<h3>Послуги, що надаються під час фотосесій:</h3>");
        printf("<table><tr><th>ІД Фотосесії</th><th>ІД Послуги</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['session_id'], $row['service_id']);
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="insertIntoPhotoSessionServiceForm.php">Вставити рядок</a><br></li>
        <li><a href="deleteFromPhotoSessionServiceForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
