<?php
include 'db.php';

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
  die('Query FAILED!');
}
?>

<?php include 'includes/header.php' ?>

<div class="container">
  <?php
  while ($row = mysqli_fetch_assoc($result)) {
  ?>
    <pre>
        <?php
        print_r($row);
        ?>
      </pre>
  <?php
  }
  ?>
</div>

<?php include 'includes/footer.php' ?>