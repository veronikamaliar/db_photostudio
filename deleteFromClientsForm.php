<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showClients.php";
    ?>


    <form method="POST" action="deleteFromClients.php">
        <input type="text" name="delete_client_id" placeholder="ID клієнта для видалення">
        <input type="submit" value="Видалити клієнта">
    </form>

</body>
</html>