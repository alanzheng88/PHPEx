<?php

class Request
{
    public static function uri()
    {
        // superglobal: request uris, methods, port, document root, http host, etc
        // dd($_SERVER);

        // trim first and last characters in string
        // in this case, trim using forward slash '/' character
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        return $uri;
    }
}