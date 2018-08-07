<?php

class Router
{

    protected $routes = [];

    public static function load($file)
    {
        // using new self --> assumes no inheritance is being done
        // https://stackoverflow.com/questions/15898843/what-means-new-static
        $router = new self();
        require $file;
        return $router;
    }

    // load the routes
    public function define($routes)
    {
        $this->routes = $routes;
    }

    // direct traffic
    public function direct($uri)
    {
        // given: example.com/about/culture
        // uri is: /about/culture
        // check if key in associative array exists
        $uriExists = array_key_exists($uri, $this->routes);
        if ($uriExists) {
            return $this->routes[$uri];
        }

        // throwing exceptions
        throw new Exception('No route defined for uri: '.$uri);
    }

}