<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Photo Sessions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Photo Sessions</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM photo_session");
        printf("<h3>Список фотосесій:</h3>");
        printf("<table><tr><th>ІД</th><th>ІД Клієнта</th><th>ІД Фотографа</th><th>Тип</th><th>Дата та час</th><th>Тривалість</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf(
                "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                $row['session_id'],
                $row['client_id'],
                $row['photographer_id'],
                $row['type'],
                $row['date_time'],
                $row['duration']
            );
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="searchPhotoSessionForm.php">Пошук фотосесії</a><br></li>
        <li><a href="insertIntoPhotoSessionForm.php">Вставити рядок</a><br></li>
        <li><a href="updatePhotoSessionForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromPhotoSessionForm.php">Видалити рядок</a><br></li>
        <li><a href="showPhotosessionServiceEquipment.php">Звіт Фотосесія - Послуга - Обладнання</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
