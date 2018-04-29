<?php

require 'vendor/autoload.php';



$name = 'Jonathan';  //data from a off-class
$age = 33;  //data from a off-class
$age = false;  //data from a off-class

$futureEmployee = new src\Array_example();
$futureEmployee->addName();
$futureEmployee->addAge();
$futureEmployee->addLearning();

$person = $futureEmployee->returnPerson();

require 'src/Array_example.view.php';
