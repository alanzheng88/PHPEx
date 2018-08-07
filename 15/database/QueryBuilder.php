<?php

class QueryBuilder
{
    protected $pdo;

    // using type hinting so error will be thrown if
    // incorrect type is passed as argument (in this case: PDO)
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        // prepare sql query
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        // execute the statement
        $statement->execute();

        // fetch results into a class (if second argument 
        // of fetchAll is provided)
        // method returns list of objects
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

}