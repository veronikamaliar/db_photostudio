<?php

include "databaseConnect.php";

$client_id = $_POST['delete_client_id'];
$stmt = $pdo->prepare("DELETE FROM clients WHERE client_id=:client_id");
$stmt->bindParam(':client_id', $client_id);
if ($stmt->execute()) {
    echo "Клієнт видалений успішно!";
} else {
    echo "Помилка видалення клієнта.";
}


include("showClients.php")
?>