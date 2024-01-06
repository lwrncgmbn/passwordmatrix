<?php

use Core\Validator;
use Core\Database;
use Core\App;

$username = $_POST['username'];
$password = $_POST['password'];
$hashedPass = password_hash($_POST['password'], PASSWORD_BCRYPT);
$department = $_POST['department'];

// VALIDATE USERNAME
$errors = [];
if (!Validator::string($username, 7, 255)) {
    $errors['username'] = "Username must have atleast 7 characters!";
}

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = "Password must have atleast 8 characters!";
}

if (!empty($errors)) {
    return require "src/views/index.view.php";
}

$db = App::resolve(Database::class);

// CHECK IF THE EMAIL ALREADY EXIST
$user = $db->query('SELECT * FROM accounts where username = :username', [
    'username' => $username
])->find();

// IF YES, REDIRECT TO LOGIN
if ($user) {
    // dd("Its already registered");
    $errors['account'] = "This username is already taken!";
    // header('location: /');
    return require "src/views/index.view.php";
    exit();
} else {
    // ELSE, SAVE IT TO DATABASE
    $db->query("INSERT INTO accounts (`username`, `password`, `hashedPass`, `department`) VALUES ('$username', '$password', '$hashedPass', '$department')");

    header('location: /accounts');
    exit();
}

// $db->query("INSERT INTO accounts (`username`, `password`, `hashedPass`) VALUES ('$username', '$password', '$hashedPass')");

// header('location: /accounts');
// exit();
