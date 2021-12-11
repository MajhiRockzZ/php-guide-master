<?php
$connection = mysqli_connect('localhost', 'root', '', 'practice');
if (!$connection) {
  die("Database conection failed");
}
