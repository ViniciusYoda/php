<!-- PHP foreach Loop

The foreach loop - Loops through a block of code for each element in an array or each property in an object.
The foreach Loop on Arrays

The most common use of the foreach loop, is to loop through the items of an array.
Example
Get your own PHP Server

Loop through the items of an indexed array: -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
?>

<!-- For every loop iteration, the value of the current array element is assigned to the variabe $x. The iteration continues until it reaches the last array element.
Keys and Values

The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.

Associative arrays are different, associative arrays use named keys that you assign to them, and when looping through associative arrays, you might want to keep the key as well as the value.

This can be done by specifying both the key and value in the foreach defintition, like this:
Example

Print both the key and the value from the $members array: -->
<?php
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
?>
<!-- You will learn more about arrays in the PHP Arrays chapter.
ADVERTISEMENT
The foreach Loop on Objects

The foreach loop can also be used to loop through properties of an object:
Example

Print the property names and values of the $myCar object: -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y <br>";
}
?>
<!-- You will learn more about objects in the PHP Objects and Classes chapter.
The break Statement

With the break statement we can stop the loop even if it has not reached the end:
Example

Stop the loop if $x is "blue": -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
?>
<!-- The continue Statement

With the continue statement we can stop the current iteration, and continue with the next:
Example

Stop, and jump to the next iteration if $x is "blue": -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>
<!-- Foreach Byref

When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:
Example

By default, changing an array item will not affect the original array: -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
?>
<!-- BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array:
Example

By assigning the array items by reference, changes will affect the original array: -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
 ?>

<!-- Alternative Syntax

The foreach loop syntax can also be written with the endforeach statement like this
Example

Loop through the items of an indexed array: -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
?>