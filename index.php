<?php
    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    require_once('vendor/autoload.php');

    // Create an instance of the Base class
    $f3 = Base::instance();
    $f3->set('DEBUG', 3);

    // Define a default route (home page)
    $f3->route('GET /', function()
    {
        //echo "My Food Page";
        $view = new Template();
        echo $view->render('views/home.html');
    });

    // Define a "breakfast" route
    $f3->route('GET /breakfast', function()
    {
        //echo "Breakfast";
        $view = new Template();
        echo $view->render('views/breakfast.html');
    });

    $f3->run();
