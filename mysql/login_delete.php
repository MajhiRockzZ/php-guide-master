<?php include 'db.php'; ?>
<?php include 'function.php'; ?>

<?php
if (isset($_POST['submit'])) {
  deleteRows();
}
?>

<?php include 'includes/header.php' ?>

<div class="container">
  <form class="mt-3" action="login_delete.php" method="POST">
    <h1 class="text-center">Delete</h1>

    <div class="mb-3">
      <select name="id" class="form-select">
        <?php showAllData(); ?>
      </select>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Delete</button>
  </form>
</div>

<?php include 'includes/header.php' ?>