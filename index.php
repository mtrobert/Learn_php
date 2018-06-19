<?php
use App\Core\Request;
use App\Routes\Router;

require 'vendor/autoload.php';

require 'controllers/index.php';




$router = new Router();

require 'routes/routes.php';

require_once $router->direct(Request::uri(), Request::method());
