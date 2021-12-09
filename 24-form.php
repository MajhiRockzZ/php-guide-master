<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <style>
    .form-group {
      margin: 20px 0;
    }

    .form-group label {
      font-family: 'Segoe UI';
      font-weight: 700;
    }

    .form-group input {
      padding: 5px;
    }

    .btn {
      font-weight: 700;
      padding: 5px 10px;
    }
  </style>
</head>

<body>
  <form action="25-form_external.php" method="POST">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn">
  </form>
</body>

</html>