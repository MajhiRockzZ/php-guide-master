<?php include 'db.php'; ?>
<?php include 'function.php'; ?>

<?php
if (isset($_POST['submit'])) {
  updateTable();
}
?>

<?php include 'includes/header.php' ?>

<div class="container">
  <form class="mt-3" action="login_update.php" method="POST">
    <h1 class="text-center">Update</h1>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" class="form-control" id="username">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
    </div>

    <div class="mb-3">
      <select name="id" class="form-select">
        <?php showAllData(); ?>
      </select>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<?php include 'includes/footer.php' ?>