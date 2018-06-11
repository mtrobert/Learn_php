<?php

$router->get('', 'index.php');
$router->get('php/learn_php/about', 'controllers/about.php');
$router->get('php/learn_php/about-something', 'controllers/about-something.php');
$router->get('php/learn_php/contact', 'controllers/contact.php');
$router->post('php/learn_php/names', 'controllers/add_user.php');
