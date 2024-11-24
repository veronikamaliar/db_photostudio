<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Звіт по фотосесіях</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
include "databaseConnect.php";

try {
    $stmt = $pdo->query("SELECT c.name AS client_name, p.name AS photographer_name, ps.type AS session_type FROM clients c LEFT JOIN photo_session ps ON c.client_id = ps.client_id LEFT JOIN photographers p ON ps.photographer_id = p.photographer_id");

    printf("<h1>Звіт - Клієнти, Фотографи та Типи фотосесій: </h1><br>");
    printf("<table><tr><th>Ім'я клієнта</th><th>Фотограф</th><th>Тип фотосесії</th></tr>");
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['client_name'], $row['photographer_name'], $row['session_type']);
    };
    printf("</table>");
} catch (PDOException $e) {
    die("Помилка запиту: " . $e->getMessage());
}
?>

    <br><br><br>

    <ul>
        <li><a href="showClients.php">Таблиця Clients</a><br></li>
        <li><a href="showPhotographers.php">Таблиця Photographers</a><br></li>
        <li><a href="showServices.php">Таблиця Services</a><br></li>
        <li><a href="showPhotoSession.php">Таблиця Photo Sessions</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>
