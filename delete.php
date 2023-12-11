<?php
include 'databaseconnectie.php';
 
try {
    $pdo = new Database();
 
    if (isset($_GET['id'])) {
        $pdo->deleteUser($_GET['id']);
        header("Location:home.php?success");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>