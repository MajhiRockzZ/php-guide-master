<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<div class="container">
  <?php
  if (isset($_POST['action'])) {
    create();
  }
  ?>
  <h1>Create</h1>
  <div class="row">
    <form action="create.php" method="POST" class="col s12">

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">person</i>
          <input id="username" type="text" name="username" class="validate">
          <label for="username">Username</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Create User</button>
    </form>
  </div>
</div>

<?php include 'includes/footer.php' ?>