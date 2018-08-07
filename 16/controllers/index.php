<?php

require 'Task.php';

$tasks = $app['database']->selectAll('todos');

// here, we do mapping ourselves
// alternatively, we can add the classname as a second argument
// in $statement->fetchAll(PDO::FETCH_CLASS) --> see QueryBuilder.php
$tasks = array_map(function ($task) {
    $t = new Task();
    $t->description = $task->description;
    $t->completed = $task->completed;
    return $t;
}, $tasks);

require 'views/index.view.php';