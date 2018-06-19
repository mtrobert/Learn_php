<?php

  use App\Core\App;  
  use App\Users\User;

  require 'core/bootstrap.php';

  $query = App::get('database');

  $users = $query->selectAll('users', 'User');


  require 'views/index.view.php';

?>
