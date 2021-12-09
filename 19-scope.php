<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  $x = 'outside';

  function convert()
  {
    global $x;
    $x = 'inside';
  }

  echo $x . '<br/>';

  convert();

  echo $x;
  ?>
</body>

</html>