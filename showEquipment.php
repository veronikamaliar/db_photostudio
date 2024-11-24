<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Equipment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Equipment</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM equipment");
        printf("<h3>Список обладнання:</h3>");
        printf("<table><tr><th>ІД</th><th>Назва</th><th>Стан</th><th>Доступність</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['equipment_id'], $row['name'], $row['equipment_condition'], $row['availability']);
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="searchEquipmentForm.php">Пошук обладнання</a><br></li>
        <li><a href="insertIntoEquipmentForm.php">Вставити рядок</a><br></li>
        <li><a href="updateEquipmentForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromEquipmentForm.php">Видалити рядок</a><br></li>
        <li><a  href="showPhotosessionServiceEquipment.php">Звіт Фотосесія - Послуга - Обладнання</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
