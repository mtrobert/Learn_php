  <div class="Example">
    <header><strong>Database Example</strong><br/></header>
    <?php foreach ($users as $key => $user) :?>
      <h2><?= $user->getName();?></h2>
    <ul>
        <li><?= $user->getAge(); ?></li>
        <li><?= $user->getLearning(); ?></li>
    </ul>
  <?php endforeach;?>
  </div>
