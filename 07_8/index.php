<?php 
    
    // associative array
    $person = [

        'age' => 16,

        'firstname' => 'Alan',

        'hair' => 'brown'

    ];


    $task = [

        'title' => 'finish homework',

        'due' => '2018-05-08',

        'assigned_to' => 'Bob',

        'completed' => false

    ];

    // make each word capitalized
    // result ->  Title Value: Finish Homework
    echo ucwords('title value: '.$task['title']);



    // add to associative array
    $person['lastname'] = 'Zheng';




    $animals = ['bird','dolphin','cheetah'];
    // append to end of array
    $animals[] = 'cougar';
    // updating existing value in array
    $animals[0] = 'cat';
    // removing element from array
    unset($animals[1]);




    // for debugging: var_dump can be used on any variable
    // wrap it in pre tags to make debug output look nicer
    echo "<pre>";
    var_dump($person);
    echo "</pre>";

    include 'index.view.php';

    echo "<p>Line before die()</p>";

    // stop further execution (often used after var_dump -- die() can be called with no arguments)

    // using die with var_dump
    die(var_dump($animals));
    // die('died here! nothing after this line will be executed');

    echo "<p>Line after die()</p>";
