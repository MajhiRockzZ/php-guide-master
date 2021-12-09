<?php
if (isset($_POST['submit'])) {
  $names = ['edwin', 'sumesh', 'admin', 'users'];
  $minimum = 5;
  $maximum = 10;

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (strlen($username) < $minimum) {
    echo 'Username has to be longer than five.';
  }

  if (strlen($username) > $maximum) {
    echo 'Username cannto be longer than ten';
  }

  if (!in_array($username, $names)) {
    echo 'Sorry you are not allowed!';
  }
}
