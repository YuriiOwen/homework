<?php

namespace Homework;

class Kernel
{
    public function boot()
    {
        $routes = Route::getList();
        $uri = $_SERVER['REQUEST_URI'];

//        var_dump('routes', $routes);

        if (array_key_exists($uri, $routes)) {
            $controller = new $routes[$uri]['args'][0];
            return  call_user_func([$controller, $routes[$uri]['args'][1]]);
        } else {
            http_response_code(404);
            echo '404 Not found';
        }
    }
}