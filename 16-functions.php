<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  function init()
  {
    saySomething();
    calculate();
  }

  function saySomething()
  {
    echo 'Hello Student, do you like the class? yes? okay great' . '<br/>';
  }

  function calculate()
  {
    echo 456 + 345;
  }

  init();
  ?>
</body>

</html>