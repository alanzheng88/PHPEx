<?php

class Connection
{
    public static function make($config)
    {
        try {
            // PDO = php data object
            // dsn: a connection string to connect to database
            // <database>:host=<ipaddress>;dbname=<dbname>
            // ** NOTE **
            // always use PDO (best practice) to connect to database
            // avoid using mysql_connect (deprecated) which allows for sql injection
            // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 
                        // 'todouser', 'password1', NULL);

            return new PDO(

                $config['connection'].';dbname='.$config['name'],

                $config['username'],

                $config['password'],

                $config['options']
            
            );
            

        } catch (PDOException $e) {
            // die halts the execution
            die($e->getMessage());
        }
    }

}