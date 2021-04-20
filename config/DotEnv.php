<?php
//DOC: https://packagist.org/packages/symfony/dotenv
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$ruta = isset($argv) ? './.env' : '../.env';
$dotenv->load($ruta);
