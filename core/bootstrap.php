<?php

App::bind('config', require 'core/config.php');

// $config = require 'core/config.php';

// die(var_dump(App::get('config')));


App::bind('database', new QuerieBuilder(
  ConnectToADatabase::ConnectToDb(App::get('config')['database']))
);

// return new QuerieBuilder(
//   ConnectToADatabase::ConnectToDb($config['database'])
// );
// die(var_dump(App::get('database')));
