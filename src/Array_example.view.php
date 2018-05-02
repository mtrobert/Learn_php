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
  <div class="Example">
    <header><strong>Array Example</strong><br/></header>
    <ul>
      <?php foreach ($person as $key => $value) :?>
        <li><strong><?= $key ?></strong><?= ' => ' .  $value ?>
        <?php endforeach;?>
    </ul>
  </div>
  <div class="Example">
    <header><strong>Database Example</strong><br/></header>
    <?php foreach ($users as $key => $value) :?>
      <h2><?= $value->name;?></h2>
    <ul>
        <li><?= $value->age; ?></li>
        <li><?= $value->learning; ?></li>
    </ul>
  <?php endforeach;?>
  </div>
</body>
</html>
