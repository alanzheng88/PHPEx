<?php
// essentially a factory file for abstracting away the setup of a db
// include / require paths : http://us.php.net/manual/en/function.include.php
// order of resolving paths: include_path dirs -> calling script dir -> current working dir

$app = [];


require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';
$app['config'] = require 'config.php';



// use colon colon to call static method
// also, instead of hardcoding a global variable like $query, 
// we can return it instead, so that the file requiring it can
// assign it to a variable
// return new QueryBuilder(Connection::make($app['config']['database']));

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database']));