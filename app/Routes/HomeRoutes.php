<?php
namespace App\Routes;

use App\Controllers\HomeController;

$home_routes = [
    (object)[
        'method' => 'GET',
        'path' => '/',
        'action'=> function($request){
            return  (new HomeController)->index();
        }
    ],
    (object)[
        'method' => 'GET',
        'path' => '/post.php',
        'action' => function($request){
            return (new HomeController)->posts();
        }
    ],
    (object)[
        'method' => 'GET',
        'path' => '/insert.php',
        'action' => function($request){
            return (new HomeController)->insert();
        }
    ],
    (object)[
        'method' => 'POST',
        'path' => '/insert.php',
        'action' => function($request){
            return (new HomeController)->insert();
        }
    ],
    (object)[
        'method' => 'GET',
        'path' => '/delete.php',
        'action' => function($request){
            return (new HomeController)->delete();
        }
    ],
    (object)[
        'method' => 'GET',
        'path' => '/primary.php',
        'action' => function($request){
            return (new HomeController)->primary();
        }
    ],
    (object)[
        'method' => 'GET',
        'path' => '/edit.php',
        'action' => function($request){
            return (new HomeController)->edit();
        }
    ],
    (object)[
        'method' => 'POST',
        'path' => '/edit.php',
        'action' => function($request){
            return (new HomeController)->edit();
        }
    ]
];