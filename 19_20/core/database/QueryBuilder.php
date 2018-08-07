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

    public function insert($table, $parameters)
    {
        // join array using delimiter
        $cols = implode(',', array_keys($parameters));
        $placeholders = ':' . implode(', :', array_keys($parameters));

        try {
            // INSERT INTO users (firstname, email) VALUES(:firstname, :email)
            // construct string with placeholders
            $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', 
                            $table, 
                            $cols, 
                            $placeholders);
            $statement = $this->pdo->prepare($sql);

            // one way to bind parameters: use bindParam function on $statement
            // $statement->bindParam(':name', 'Joe');

            // alternatively use an array to bind parameters
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}