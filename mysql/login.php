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

  /* if ($username && $password) {
    echo 'Username : ' . $username . " | Password : " . $password;
  } else {
    echo 'Username and Password field cannot be blank.';
  } */
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./assets/bootstrap.css">
  <script src="./assets/bootstrap.js" defer></script>
  <title></title>
</head>

<body>
  <div class="container">
    <form class="mt-3" action="login.php" method="POST">

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>