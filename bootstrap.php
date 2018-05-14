<?php

require 'database/ConnectToADatabase.php';
require 'database/QuerieBuilder.php';

return new QuerieBuilder(ConnectToADatabase::ConnectToDb());
