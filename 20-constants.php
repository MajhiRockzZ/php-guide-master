<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>

</body>
<?php
echo '<h1>';
$number = 10;
echo $number . '<br/>';

define('NAME', 1000);

echo NAME . '<br/>';

const CONSTANT = 'Hello World';
echo CONSTANT . '<br/>';

const ANOTHER_CONST = CONSTANT . '; Goodbye World';
echo ANOTHER_CONST . '<br/>';

const ANIMALS = array('dog', 'cat', 'bird');
echo ANIMALS[1] . '<br/>';

define('ANIMALS1', array('dog', 'cat', 'bird'));
echo ANIMALS1[1];

echo '</h1>';
?>

</html>