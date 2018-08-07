<?php

// mapping between uri and controller
$router -> define([
    
    '' => 'controllers/index.php',

    'about' => 'controllers/about.php',

    'about/culture' => 'controllers/about-culture.php',

    'contact' => 'controllers/contact.php'

]);