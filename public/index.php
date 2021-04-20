<?php

try {
    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once "../config/DotEnv.php";
require_once '../config/Router.php';

} catch (\Throwable $th) {
    if($_ENV['DEV_MODE'] == 'true'){
        echo $th->getLine().':'.$th->getMessage();
    }else{
        echo "Un error ha ocurrido";
    }
}