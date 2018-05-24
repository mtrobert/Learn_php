<?php

  require 'users/User.php';
  $query = require 'core/bootstrap.php';
  $users = $query->selectAll('users', 'User');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
  </head>
    <body>
      <div class="navbar">
        <a href="index.php" class="navitem">Home</a>
        <a href="views/contact.view.php" class="navitem">Contact</a>
        <a href="views/about.view.php" class="navitem">About Us</a>
      </div>
      <?php require 'views/Database_example.view.php'; ?>

    </body>
</html>
