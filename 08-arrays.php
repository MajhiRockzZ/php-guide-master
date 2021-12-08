<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  $numberList = array(23, 64, 267, 478, 267, 8765, 345, '5345', '<span>Hello</span>');
  // $numberList = [1, 2, 3, 4];

  print_r($numberList);
  echo '<br/>';
  echo $numberList[0];
  ?>
</body>

</html>