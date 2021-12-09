<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <?php
  $number = 4;

  switch ($number) {
    case 34:
      echo 'is it 34';
      break;
    case 35:
      echo 'is it 35';
      break;
    case 37:
      echo 'is it 37';
      break;
    case 38:
      echo 'is it 38';
      break;
    default:
      echo  'is it ' . $number;
      break;
  }
  ?>
</body>

</html>