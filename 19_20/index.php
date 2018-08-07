<?php 

require 'functions.php';    
require 'core/bootstrap.php';


$router = Router::load('routes.php');
require $router->direct(Request::uri(), Request::method());
