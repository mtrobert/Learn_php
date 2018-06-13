<?php require 'views/partials/head.php'; ?>

<h1>The data has been successfully added to a database:</h1>

<?php
// var_dump($_POST)

$query->insert('users', [

    'name' => $_POST['name'] . ' ' .  $_POST['last_name'],
    'age' => $_POST['age'],
    'learning' => $_POST['learning'],

]);



?>
