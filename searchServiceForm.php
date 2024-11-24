<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук послуги</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук послуги</h1>

    <form method="POST" action="">
        <input type="text" name="search_service" placeholder="Введіть назву послуги">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_service']) && !empty($_POST['search_service'])) {
        $search = "%" . $_POST['search_service'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT s.name AS service_name, s.price AS service_price, s.description AS service_description FROM Services s WHERE s.name LIKE :search;");
            
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Назва послуги: " . $row['service_name'] . ". Ціна: " . $row['service_price'] . ". Опис: " . $row['service_description'] . "<br>";
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
