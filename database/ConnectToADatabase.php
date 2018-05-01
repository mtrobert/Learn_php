<?php

try {

  $pdo = new PDO('mysql:host=localhost;dbname=learnings', 'root', '');

} catch (PDOException $e) {

  die($e->getMessage() . "<br>" . 'Could not connect to a database. Please try again.');

}
