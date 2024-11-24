<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук фотографа</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук фотографа</h1>

    <form method="POST" action="">
        <input type="text" name="search_photographer" placeholder="Введіть ім'я фотографа">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_photographer']) && !empty($_POST['search_photographer'])) {
        $search = "%" . $_POST['search_photographer'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT p.name AS photographer_name, p.specialization AS photographer_specialization, ps.date_time AS session_date_time FROM photographers p LEFT JOIN PHOTO_SESSION ps ON p.photographer_id = ps.photographer_id WHERE p.name LIKE :search;");
            
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Ім'я фотографа: " . $row['photographer_name'] . ". Спеціалізація: " . $row['photographer_specialization'] . ". Дата та час: " . $row['session_date_time'] . "<br>";
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
