<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<div class="container">
  <h1>Read</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php
      read();
      while ($users = mysqli_fetch_assoc($result)) {
        $id = $users['id'];
        $username = $users['username'];
        $password = $users['password'];

        echo "
        <tr>
          <td>$id</td>
          <td>$username</td>
          <td>$password</td>
        </tr>
        ";
      } ?>
    </tbody>
  </table>
</div>

<?php include 'includes/footer.php' ?>