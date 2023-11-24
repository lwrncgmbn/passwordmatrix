<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$searchUser = '';

$accounts = $db->query('SELECT * FROM accounts')->get();

// dd($searchUser);

require "src/views/list.view.php";
