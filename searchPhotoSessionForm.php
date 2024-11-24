<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук фотосесії</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук фотосесії</h1>

    <form method="POST" action="">
        <input type="text" name="search_session" placeholder="Введіть тип фотосесії">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_session']) && !empty($_POST['search_session'])) {
        $search = "%" . $_POST['search_session'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT ps.type AS session_type, ps.date_time AS session_date, ps.duration AS session_duration, c.name AS client_name FROM PHOTO_SESSION ps LEFT JOIN clients c ON ps.client_id = c.client_id WHERE ps.type LIKE :search;");
            
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Тип фотосесії: " . $row['session_type'] . ". Дата: " . $row['session_date'] . ". Тривалість: " . $row['session_duration'] . ". Ім'я клієнта: " . $row['client_name'] . "<br>";
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
