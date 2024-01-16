<?php

/* Leah Konma
 * 1.26.24
 * https://leahkonma.greenriverdev.com/328/diner/
 * This is my CONTROLLER for the Diner app
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once ('vendor/autoload.php');

//instantiate Fat-Free framework (F3)
$f3 = Base::instance(); //static method

//define a default route
$f3->route('GET /', function (){
    echo "My Diner";
});

//run Fat-Free
$f3->run(); //instance method



