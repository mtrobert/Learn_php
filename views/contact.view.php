<?php require 'partials/head.php'; ?>

    <h1>CONTACT US</h1>

    <form method="GET" action="names">
      Name: <input type="text" name="name"></br>
      Last Name: <input type="text" name="last_name"></br>
      Age: <input type="text" name="age"></br>
      Learning: <select name="learning">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
      <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>
