<?php

try {

  $pdo = new PDO('mysql:host=localhost;dbname=learning', 'root', '');

} catch (PDOException $e) {
  // var_dump($e);
  die('Could not connect to a database. Please try again.');
}
