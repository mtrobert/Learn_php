<?php


  require 'users/User.php';
  $query = require 'core/bootstrap.php';
  $users = $query->selectAll('users', 'User');


  require 'views/index.view.php';

?>
