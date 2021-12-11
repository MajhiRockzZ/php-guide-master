<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];


  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if ($connection) {
    echo 'We are connected!';
  } else {
    die("Database connection failed!");
  }

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $hashFormat = "$2y$10$";
  $salt = "iusesomecrazystrings22";
  $hashF_and_salt = $hashFormat . $salt;

  $password = crypt($password, $hashF_and_salt);

  $query = "INSERT INTO users(username,password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED!');
  } else {
    echo "Record Created";
  }
}
?>

<?php include "includes/header.php" ?>

<div class="container">
  <form class="mt-3" action="login_create.php" method="POST">
    <h1 class="text-center">Create</h1>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include "includes/footer.php" ?>