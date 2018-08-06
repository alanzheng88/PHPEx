<?php

function dd($data) 
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb()
{
    try {
        // PDO = php data object
        // dsn: a connection string to connect to database
        // <database>:host=<ipaddress>;dbname=<dbname>
        // ** NOTE **
        // always use PDO (best practice) to connect to database
        // avoid using mysql_connect (deprecated) which allows for sql injection
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 
                    'todouser', 'password1');
    } catch (PDOException $e) {
        // die halts the execution
        die('Could not connect');
    }
}

function fetchAllTasks($pdo)
{
    // prepare sql query
    $statement = $pdo->prepare('SELECT * FROM todos');

    // execute the statement
    $statement->execute();

    // fetch results into a class called Task
    // returns list of objects of class Task
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}