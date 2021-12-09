<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  function addNumbers($num1, $num2)
  {
    $sum = $num1 + $num2;
    return $sum;
  }

  $result = addNumbers(1, 2);
  echo '<h1>' . $result . '</h1>';

  $result = addNumbers(100, $result);
  echo '<h1>' . $result . '</h1>';
  ?>
</body>

</html>