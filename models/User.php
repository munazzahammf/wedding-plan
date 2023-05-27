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

    public function getFullName()
    {
        return $this->firstname;
    }

    public function getUserByUsernameAndEmail($email, $username)
    {
        $sql = "SELECT * FROM user WHERE email = :email AND username = :username";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email'=>$email, 'username'=> $username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
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
        }
        return $this;
    }

    public function verifyUser($email, $password)
    {
        $sql = "SELECT email, password FROM user WHERE email = :email LIMIT 1";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email'=> $email, 'password'=>$password]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row & $password == $row['password']) {
        }
    }

    public function createUser($firstname, $lastname, $username, $password, $email)
    {
        $sql = "INSERT INTO user(firstname, lastname, username, password, email) VALUES(:firstname, :lastname, :username, :password, :email)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'username'=>$username,
            'password'=>$password,
            'email'=>$email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
