<?php 
    
require 'functions.php';

// abstract db creation to a function
$pdo = connectToDb();

// prepare sql query
$statement = $pdo->prepare('SELECT * FROM todos');


// execute the statement
$statement->execute();
// fetch results into both an indexed and associative array
$result1 = $statement->fetchAll();


// need to execute statement again otherwise we get 0 results
$statement->execute();
// fetch results into dummy generic object (access equivalent to associative array)
// $result2 -> list of generic objects
$result2 = $statement->fetchAll(PDO::FETCH_OBJ);
// dd($result2);

require 'Task.php';

// abstract fetching all tasks to a function
// fetch results into a class called Task
$result3 = fetchAllTasks($pdo);

// we can add methods to class Task and use them
var_dump($result3[0]->foobar());

require 'index.view.php';