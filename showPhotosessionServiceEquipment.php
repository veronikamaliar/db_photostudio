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
    $stmt = $pdo->query("SELECT ps.session_id, s.name AS service_name, e.name AS equipment_name
                          FROM photo_session ps
                          JOIN photo_session_services pss ON ps.session_id = pss.session_id
                          JOIN services s ON pss.service_id = s.services_id
                          JOIN photo_session_equipment pse ON ps.session_id = pse.session_id
                          JOIN equipment e ON pse.equipment_id = e.equipment_id");

    printf("<h1>Звіт - Фотосесії, Послуги та Обладнання</h1><br>");
    printf("<table><tr><th>Ідентифікатор фотосесії</th><th>Послуга</th><th>Обладнання</th></tr>");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['session_id'], $row['service_name'], $row['equipment_name']);
    }
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