<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Photo Session Equipment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Photo Session Equipment</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM photo_session_equipment");
        printf("<h3>Обладнання, що використовувалось під час фотосесій:</h3>");
        printf("<table><tr><th>ІД Фотосесії</th><th>ІД Обладнання</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['session_id'], $row['equipment_id']);
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="insertIntoPhotoSessionEquipmentForm.php">Вставити рядок</a><br></li>
        <li><a href="deleteFromPhotoSessionEquipmentForm.php">Видалити рядок</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
