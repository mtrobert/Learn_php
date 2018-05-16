<?php

require 'database/ConnectToADatabase.php';
require 'database/QuerieBuilder.php';
$config = require 'core/config.php';

return new QuerieBuilder(
  ConnectToADatabase::ConnectToDb($config['database'])
);
