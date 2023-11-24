<?php

// STORE ACCOUNTS
$router->get('/', 'src/Http/controllers/index.php');

// LIST OF ACCOUNTS
$router->get('/accounts', 'src/Http/controllers/list.php');
$router->post('/store', 'src/Http/controllers/store.php');

// SEARCH ACCOUNTS
$router->post('/search', 'src/Http/controllers/search.php');
