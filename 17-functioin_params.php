<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  function greeting($message)
  {
    echo '<h1>' . 'Message : ' . $message . '</h1>';
  }

  greeting('Welcome!');
  greeting('Hi customer how are you?');

  function addNumbers($number1, $number2)
  {
    echo '<h1>' . $number1 + $number2 . '</h1>';
  }

  addNumbers(48, 48);
  ?>
</body>

</html>