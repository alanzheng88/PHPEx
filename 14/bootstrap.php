<?php
// essentially a factory file for abstracting away the setup of a db
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// use colon colon to call static method
// also, instead of hardcoding a global variable like $query, 
// we can return it instead, so that the file requiring it can
// assign it to a variable
return new QueryBuilder(Connection::make());