<?php
require_once "../app/Routes/Routes.php";

//DOC: https://github.com/nikic/FastRoute
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) use ($routes){
    foreach($routes as $route){
        $r->addRoute($route->method, $route->path, $route->action);
    }
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '... 404 Not Found';
    break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '... 405 method not allowed';
    break;
    case FastRoute\Dispatcher::FOUND:
        $funcion = $routeInfo[1];
        $arguments = $routeInfo[2];
        $funcion($arguments);        
    break;
}