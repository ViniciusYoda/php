<!-- Create Array

You can create arrays by using the array() function:
Example
Get your own PHP Server -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
?>
<!-- You can also use a shorter syntax by using the [] brackets:
Example -->
<?php
$cars = ["Volvo", "BMW", "Toyota"];
?>
<!-- Multiple Lines

Line breaks are not important, so an array declaration can span multiple lines:
Example -->
<?php
$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];
?>
<!-- Trailing Comma

A comma after the last item is allowed:
Example -->
<?php
$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];
?>
<!-- Array Keys

When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
Example -->
<?php
$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];
?>
<!-- As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
Example -->
<?php
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];
?>
<!-- Declare Empty Array

You can declare an empty array first, and add items to it later:
Example -->
<?php
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
?>
<!-- The same goes for associative arrays, you can declare the array first, and then add items to it:
Example -->
<?php
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
?>
<!-- Mixing Array Keys

You can have arrays with both indexed and named keys:
Example -->
<?php
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
?>