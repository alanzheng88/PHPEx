<?php

// externalize database values to config
return [
    'database' => [

        'name' => 'mytodo',

        'username' => 'todouser',

        'password' => 'password1',

        'connection' => 'mysql:host=127.0.0.1',

        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];