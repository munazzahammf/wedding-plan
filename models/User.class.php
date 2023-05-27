<?php

class User
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $username;
    private string $password;
    private string $email;

    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getUserByEmail($email): User
    {
        $sql = "SELECT * FROM `user` WHERE email = :email";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->id = $row['id'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->username = $row['username'];
            $this->password = $row['password'];
            $this->email = $row['email'];

            return $this;
        }
    }
}