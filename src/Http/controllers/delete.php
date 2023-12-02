<?php

use Core\Database;
use Core\App;

// $config = require('src\config.php');
// $db = new Database($config['database']);

// $db = App::container()->resolve('Core\Database');
$db = App::resolve(Database::class);

// dd($db);

$delete = $_POST['id'];

// dd($delete);

// $currentOwnerID = 2;

// IF SUBMITTED, DELETE CURRENT MOTOR

$accounts = $db->query('select * from accounts where id = :id', [
    'id' => $delete
])->findOrFail();

// authorize($motor['ownerID'] == $currentOwnerID);

$db->query('delete from accounts where id = :id', [
    'id' => $delete
]);

header('location: /accounts');
exit();
