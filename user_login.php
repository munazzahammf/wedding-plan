<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once 'database.php';
include_once 'controllers/UserController.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $controller = new UserController($db);

    $loginStatus = $controller->loginUser($email, $pass);

    if ($loginStatus) {
        session_start();

        $_SESSION['user_id'] = $loginStatus['id'];
        $_SESSION['username'] = $loginStatus['username'];

        // Redirecting to Home Page.
        header('Location: index.php');
    }
} else {
    $message[] = 'incorrect email or password!';
}
