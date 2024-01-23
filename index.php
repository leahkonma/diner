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
    //display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

//define a breakfast route
$f3->route('GET /breakfast', function (){
    //display a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

//define an order 1 route
$f3->route('GET|POST /order1', function($f3) {

    //if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //validate the data
        $food = $_POST['food'];
        $meal = $_POST['meal'];

        //put the data in the session array
        $f3->set('SESSION.food', $food);
        $f3->set('SESSION.meal', $meal);

        //redirect to order2 route
        $f3->reroute('order2');
    }

    $view = new Template();
    echo $view->render('views/order-form1.html');
});

//define an order form 2 route
$f3->route('GET|POST /order2', function ($f3) {

    //if the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate the data
        if (isset($_POST['conds'])) {
            $conds = implode(", ", $_POST['conds']);
        } else {
            $conds = "None selected";
        }

        // Put the data in the session array
        $f3->set('SESSION.conds', $conds);
        // Redirect to summary route
        $f3->reroute('summary');
    }
    //display a view page
    $view = new Template();
    echo $view->render('views/order-form1.html');
});

//define a summary route
$f3->route('GET /summary', function () {
    //display a view page
    $view = new Template();
    echo $view->render('views/order-summary.html');
    });

//run Fat-Free
$f3->run(); //instance method
