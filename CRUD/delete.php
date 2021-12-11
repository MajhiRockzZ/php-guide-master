<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<div class="container">
  <?php
  if (isset($_POST['action'])) {
    delete();
  }
  ?>
  <h1>Delete</h1>
  <div class="row">
    <form action="delete.php" method="POST" class="col s12">

      <div class="input-field col s12">
        <select class="user-id" name="id">
          <?php
          read();

          while ($users = mysqli_fetch_assoc($result)) {
            $id = $users['id'];
            $username = $users['username'];

            echo "<option value='$id'>$id. $username</option>";
          }
          ?>

        </select>
        <label>Select User</label>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Delete User</button>
    </form>
  </div>
</div>

<?php include 'includes/footer.php' ?>