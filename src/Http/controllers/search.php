<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$searchUser = $_POST['searchUser'];

$accounts = $db->query('SELECT * FROM accounts')->get();

$searchAccounts = $db->query('SELECT * FROM accounts where username = :username', [
    'username' => $searchUser
])->get();

// dd($searchAccounts);

require "src/views/list.view.php";
