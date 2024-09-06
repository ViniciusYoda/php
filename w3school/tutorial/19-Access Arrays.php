<!-- PHP Access Arrays
Access Array Item

To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
Example
Get your own PHP Server

Access an item by referring to its index number: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
?>
<!-- Note: The first item has index 0.

To access items from an associative array, use the key name:
Example

Access an item by referring to its key name: -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
?>
<!-- Double or Single Quotes

You can use both double and single quotes when accessing an array:
Example -->
<?php
echo $cars["model"];
echo $cars['model'];
?>
<!-- Excecute a Function Item

Array items can be of any data type, including function.

To execute such a function, use the index number followed by parentheses ():
Example

Execute a function item: -->
<?php
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction());

$myArr[2]();
?>
<!-- Use the key name when the function is an item in a associative array:
Example

Execute function by referring to the key name: -->
<?php
function myFunction2() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction2());

$myArr["message"]();
?>
<!-- Loop Through an Associative Array

To loop through and print all the values of an associative array, you can use a foreach loop, like this:
Example

Display all array items, keys and values: -->
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>
<!-- Loop Through an Indexed Array

To loop through and print all the values of an indexed array, you can use a foreach loop, like this:
Example

Display all array items: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
?>