<?php

class User
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getUserByUsername($username)
    {
        $sql = "SELECT * FROM user WHERE username = :username";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['username' => $username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByUsernameAndEmail($email, $username)
    {
        $sql = "SELECT * FROM user WHERE email = :email OR username = :username";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM `user` WHERE email = :email";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function verifyUser($email, $password)
    {
        $sql = "SELECT email, password FROM user WHERE email = :email LIMIT 1";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email, 'password' => $password]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row & $password == $row['password']) {
        }
    }

    public function createUser($firstname, $lastname, $username, $password, $email)
    {
        $sql = "INSERT INTO user(firstname, lastname, username, password, email) VALUES(:firstname, :lastname, :username, :password, :email)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'password' => $password,
            'email' => $email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
