<?php
$host = 'localhost';
$dbname = 'mywed';
$dbUser = "root";
$dbPassword = "";
$dbPort = 4309;

$dbInfo = "mysql:host=$host;dbname=$dbname;port=$dbPort";
try {
    //create a database connection with a PDO object
    $db = new PDO($dbInfo, $dbUser, $dbPassword);
} catch (PDOException $e) {
    $e = $e->getMessage();
    echo $e;
    exit();
}
