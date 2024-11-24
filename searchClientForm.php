<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук клієнта</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук клієнта</h1>

    <form method="POST" action="">
        <input type="text" name="search_client" placeholder="Введіть ім'я клієнта">
        <input type="submit" value="Пошук">
    </form>

    <?php
include "databaseConnect.php";

if (isset($_POST['search_client']) && !empty($_POST['search_client'])) {
    $search = "%" . $_POST['search_client'] . "%";

    try {
        $stmt = $pdo->prepare("SELECT c.name AS client_name, ps.type AS session_type, ps.duration AS session_duration FROM clients c LEFT JOIN PHOTO_SESSION ps ON c.client_id = ps.client_id WHERE c.name LIKE :search;");
        
        $stmt->bindParam(':search', $search, PDO::PARAM_STR);
        
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "Ім'я та прізвище: " . $row['client_name'] . ". Тип фотосесії: " . $row['session_type'] . ". Тривалість: " . $row['session_duration'] . "<br>";
            }
        } else {
            echo "Немає результатів для вашого запиту.";
        }
    } catch (PDOException $e) {
        echo "Помилка запиту: " . $e->getMessage();
    }
}
?>




    <br><br><br>

    <ul>
        <li><a href="showClients.php">Таблиця Clients</a><br></li>
        <li><a href="showPhotographers.php">Таблиця Photographers</a><br></li>
        <li><a href="showPhotoSession.php">Таблиця PhotoSession</a><br></li>
        <li><a href="showServices.php">Таблиця Services</a><br></li>
        <li><a href="showEquipment.php">Таблиця Equipment</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>


</body>

</html>