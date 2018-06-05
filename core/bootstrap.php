<?php

$config = require 'core/config.php';


require 'routes/Router.php';
require 'core/Request.php';
require 'database/ConnectToADatabase.php';
require 'database/QuerieBuilder.php';

return new QuerieBuilder(
  ConnectToADatabase::ConnectToDb($config['database'])
);
