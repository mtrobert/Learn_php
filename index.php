<?php

require 'vendor/autoload.php';
require 'database/ConnectToADatabase.php';

$query = $pdo->prepare('select * from users');
$query->execute();
$results = $query->fetchAll();
echo '<pre>', var_dump($results), '</pre>';



// $name = 'Jonathan';  //data from a off-class
// $age = 44;  //data from a off-class
// $learning = true;  //data from a off-class

$futureEmployee = new src\Array_example();
$futureEmployee->addName();
$futureEmployee->addAge();
$futureEmployee->addLearning();

$person = $futureEmployee->returnPerson();

require 'src/Array_example.view.php';
