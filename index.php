<?php

// 328/Week4/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function($f3) {
    // add data to the Fat-Free hive
    $f3->set('name', 'Tina');
    $f3->set('color', 'Blue');
    $f3->set('car', 'Subaru');

    // define array of fruits and add to hive
    $fruits = array('apple', 'banana', 'orange');
    $f3->set('fruitList', $fruits);

    // define array of cars
    $cars = array('Subaru', 'Honda', 'Toyota');
    $f3->set('carsList', $cars);

    // Define associative array of students
    $students = array('101'=>'Mason', '102'=>'Tilak', '103'=>'Sage');
    $f3->set('studentList', $students);

    // Add a number to hive
    $f3->set('num', 5);


    // Render a view page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3->run();