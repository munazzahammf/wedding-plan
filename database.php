<?php
$dbInfo = "mysql:host=localhost;dbname=dreamday";
$dbUser = "root";
$dbPassword = "";
try {
    //create a database connection with a PDO object
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
} catch (PDOException $e) {
        $error_message = $e->getMessage();
        exit();
    }
?>