<?php include 'db.php' ?>
<?php

function create()
{
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "INSERT INTO users(username, password) ";
  $query .= "VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed! ' . mysqli_error($connection));
  } else {
    echo '<blockquote>Record Created</blockquote>';
  }
}

function read()
{
  global $connection, $result;
  $query = 'SELECT * FROM users';
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed' . mysqli_error($connection));
  }
}

function update()
{
  global $connection;
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed!' . mysqli_error($connection));
  } else {
    echo '<blockquote>Record Updated</blockquote>';
  }
}

function delete()
{
  global $connection;
  $id = $_POST['id'];

  $query = "DELETE FROM users ";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query Failed!" . mysqli_error($connection));
  } else {
    echo '<blockquote>Record Deleted</blockquote>';
  }
}
