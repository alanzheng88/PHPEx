<?php

class Router
{

    protected $routes = [

        'GET' => [],

        'POST' => [],

    ];

    public static function load($file)
    {
        // using new self --> assumes no inheritance is being done
        // https://stackoverflow.com/questions/15898843/what-means-new-static
        $router = new self();
        require $file;
        return $router;
    }

    public function get($uri, $controllerFile)
    {
        $this->routes['GET'][$uri] = $controllerFile; 
    }

    public function post($uri, $controllerFile)
    {
        $this->routes['POST'][$uri] = $controllerFile;
    }

    // direct traffic
    public function direct($uri, $requestType)
    {
        // given: example.com/about/culture
        // uri is: /about/culture
        // check if key in associative array exists
        $uriExists = array_key_exists($uri, $this->routes[$requestType]);
        if ($uriExists) {
            // returns endpoint associated to uri
            return $this->routes[$requestType][$uri];
        }

        // throwing exceptions
        throw new Exception('No route defined for uri: '.$uri);
    }

}