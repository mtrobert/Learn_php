 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
  </head>
    <body>

      <?php

        $users = $query->selectAll('users', 'user');
        require 'views/Database_example.view.php';

      ?>

    </body>
</html>
