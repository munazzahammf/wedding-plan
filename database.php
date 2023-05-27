<?php
$dbInfo = "mysql:host=localhost;dbname=mywed";
$dbUser = "root";
$dbPassword = "";
try {
    //create a database connection with a PDO object
    $db = new PDO($dbInfo, $dbUser, $dbPassword);
} catch (PDOException $e) {
    $e = $e->getMessage();
    echo $e;
    exit();
}
