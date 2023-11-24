<?php

use Core\Validator;
use Core\Database;
use Core\App;

$username = $_POST['username'];
$password = $_POST['password'];
$hashedPass = password_hash($_POST['password'], PASSWORD_BCRYPT);

// VALIDATE USERNAME
$errors = [];
if (!Validator::string($username, 7, 255)) {
    $errors['username'] = "Please provide a valid username!";
}

if (!empty($errors)) {
    return require "src/views/index.view.php";
}

$db = App::resolve(Database::class);

// CHECK IF THE EMAIL ALREADY EXIST
// $user = $db->query('SELECT * FROM accounts where username = :username', [
//     'username' => $username
// ])->find();

// // IF YES, REDIRECT TO LOGIN
// if ($user) {
//     header('location: /accounts');
//     exit();
// } else {
//     // ELSE, SAVE IT TO DATABASE
//     $db->query("INSERT INTO accounts (`username`, `password`, `hashedPass`) VALUES ('$username', '$password', '$hashedPass')");

//     header('location: /accounts');
//     exit();
// }

$db->query("INSERT INTO accounts (`username`, `password`, `hashedPass`) VALUES ('$username', '$password', '$hashedPass')");

header('location: /accounts');
exit();
