<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The Array Example</title>
  <meta name="description" content="Array Example">
  <meta name="author" content="Robert Marczak">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <header><strong>Array Example</strong><br/></header>
  <ul>
    <?php foreach ($person as $key => $value) :?>
      <li><strong><?= $key ?></strong><?= ' => ' .  $value ?>
    <?php endforeach;?>
  </ul>
</body>
</html>
