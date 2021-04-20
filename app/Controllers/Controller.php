<?php

namespace App\Controllers;

abstract class Controller {

    protected function render($dir,){

        require_once $dir;
    }


}