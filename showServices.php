<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Services</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Services</h1>
    <?php
    include "databaseConnect.php";
    try {
        $stmt = $pdo->query("SELECT * FROM services");
        printf("<h3>Список послуг:</h3>");
        printf("<table><tr><th>ІД</th><th>Назва</th><th>Ціна</th><th>Опис</th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%.2f</td><td>%s</td></tr>", $row['services_id'], $row['name'], $row['price'], $row['description']);
        }
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }
    ?>
    <br><br><br>
    <ul>
        <li><a href="searchServiceForm.php">Пошук послуги</a><br></li>
        <li><a href="insertIntoServicesForm.php">Вставити рядок</a><br></li>
        <li><a href="updateServicesForm.php">Змінити рядок</a><br></li>
        <li><a href="deleteFromServicesForm.php">Видалити рядок</a><br></li>
        <li><a href="showClientsPhotographerServices.php">Звіт Клієнт - Фотограф - Послуга</a><br></li> 
        <li><a href="showPhotosessionServiceEquipment.php">Звіт Фотосесія - Послуга - Обладнання</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
</body>
</html>
