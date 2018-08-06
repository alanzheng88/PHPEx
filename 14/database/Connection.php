<?php

class Connection
{
    public static function make()
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
            die($e->getMessage());
        }
    }

}