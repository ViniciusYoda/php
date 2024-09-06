<!-- PHP Indexed Arrays

In indexed arrays each item has an index number.

By default, the first item has index 0, the second item has item 1, etc.
Example
Get your own PHP Server

Create and display an indexed array: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>
<!-- Access Indexed Arrays

To access an array item you can refer to the index number.
Example

Display the first array item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
?>
<!-- Change Value

To change the value of an array item, use the index number:
Example

Change the value of the second item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
?>
<!-- Loop Through an Indexed Array

To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
Example

Display all array items: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}
?>
<!-- For a complete reference of all array functions, go to our complete PHP Array Reference.
ADVERTISEMENT
ADVERTISEMENT
Index Number

The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.

New items get the next index number, meaning one higher than the highest existing index.

So if you have an array like this: -->
<?php
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
?>
<!-- And if you use the array_push() function to add a new item, the new item will get the index 3:
Example -->
<?php
array_push($cars, "Ford");
var_dump($cars);
?>
<!-- But if you have an array with random index numbers, like this: -->
<?php
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";
?>
<!-- And if you use the array_push() function to add a new item, what will be the index number of the new item?
Example -->
<?php
array_push($cars, "Ford");
var_dump($cars);
?>