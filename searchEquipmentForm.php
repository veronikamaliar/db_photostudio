<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук обладнання</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук обладнання</h1>

    <form method="POST" action="">
        <input type="text" name="search_equipment" placeholder="Введіть назву обладнання">
        <input type="submit" value="Пошук">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_equipment']) && !empty($_POST['search_equipment'])) {
        $search = "%" . $_POST['search_equipment'] . "%";

        try {
            $stmt = $pdo->prepare("SELECT e.name AS equipment_name, e.availability AS equipment_availability FROM Equipment e WHERE e.name LIKE :search;");
            
            $stmt->bindParam(':search', $search, PDO::PARAM_STR);
            
            $stmt->execute();

            $count = $stmt->rowCount();

            if ($count > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "Назва обладнання: " . $row['equipment_name'] . ". Наявність: " . $row['equipment_availability'] . "<br>";
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
