<?php


  require 'users/User.php';
  require 'core/bootstrap.php';
  $query = App::get('database');
  // die(var_dump($query));
  $users = $query->selectAll('users', 'User');


  require 'views/index.view.php';

?>
