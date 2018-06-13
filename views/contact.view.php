<?php require 'partials/head.php'; ?>

    <h1>CONTACT US</h1>

    <form method="POST" action="names">
      Name: <input type="text" name="name"></br>
      Last Name: <input type="text" name="last_name"></br>
      Age: <input type="text" name="age"></br>
      Learning: <select name="learning">
                  <option value=1>Yes</option>
                  <option value=0>No</option>
                </select>
      <button type="submit">Add to a database</button>
    </form>

<?php require 'partials/footer.php'; ?>
