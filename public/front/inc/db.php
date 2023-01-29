<?php
$username = "root";
$password = "";

try {
    $connection = new PDO('mysql:host=localhost;dbname=courier_oceanwide', $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

?>
