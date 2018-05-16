<?php

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';
require 'users/User.php';


$users = $query->selectAll('users', 'user');

// echo '<pre>', var_dump($users), '</pre>';




$futureEmployee = new src\Array_example();
$futureEmployee->addName();
$futureEmployee->addAge();
$futureEmployee->addLearning();

$person = $futureEmployee->returnPerson();

require 'views/Array_example.view.php';
