<?php
include_once 'database.php';

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];

    $sql = "INSERT INTO review(name, email, review) VALUES(:name, :email, :review)";

    $stmt = $db->prepare($sql);

    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'review' => $review
    ]);

    header('Location: index.php#reviews');
}
