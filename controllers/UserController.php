<?php
require_once 'models/User.php';

class UserController
{
    private $db;
    private User $userModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($this->db);
    }

    public function loginUser($email, $password)
    {
        $user = $this->userModel->getUserByEmail($email);

        if ($user && $user['password'] == $password) {
            return $user;
        }

        return false;
    }

    public function registerUser($firstname, $lastname, $username, $password, $email)
    {
        $existingUser = $this->userModel->getUserByUsernameAndEmail($email, $username);


        if ($existingUser) {
            return "User already exists.";
        }

        $this->userModel->createUser($firstname, $lastname, $username, $password, $email);

        return "Success.!";
    }
}
