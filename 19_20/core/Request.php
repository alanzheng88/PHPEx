<?php

class Request
{
    public static function uri()
    {
        // superglobal: request uris, methods, port, document root, http host, etc
        // dd($_SERVER);

        // current: /names?firstname=alan
        // parse_url returns [ 'path'=>'/names', 'query'=>'firstname=alan' ]
        // want: names
        // parse uri to get uri path and query string
        // see: http://php.net/parse_url
        $parsedUriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $trimmedUriPath = trim($parsedUriPath, '/');
        return $trimmedUriPath;
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}