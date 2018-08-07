<?php

// superglobals $_REQUEST , $_GET , $_POST
// var_dump($_GET);
// var_dump($_POST);

$db = $app['database'];

$db->insert('users', [
    'firstname' => $_POST['firstname'],
]);
