<!-- Remove Array Item

To remove an existing item from an array, you can use the array_splice() function.

With the array_splice() function you specify the index (where to start) and how many items you want to delete.
Example
Get your own PHP Server

Remove the second item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
?>
<!-- After the deletion, the array gets reindexed automatically, starting at index 0.
Using the unset Function

You can also use the unset() function to delete existing array items.

Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
Example

Remove the second item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
?>
<!-- Remove Multiple Array Items

To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.
Example

Remove 2 items, starting a the second item (index 1): -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
?>
<!-- The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:
Example

Remove the first and the second item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
?>
<!-- Remove Item From an Associative Array

To remove items from an associative array, you can use the unset() function.

Specify the key of the item you want to delete.
Example

Remove the "model": -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
?>
<!-- Using the array_diff Function

You can also use the array_diff() function to remove items from an associative array.

This function returns a new array, without the specified items.
Example

Create a new array, without "Mustang" and "1964": -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
?>
<!-- Note: The array_diff() function takes values as parameters, and not keys.
Remove the Last Item

The array_pop() function removes the last item of an array.
Example

Remove the last item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
?>
<!-- Remove the First Item

The array_shift() function removes the first item of an array.
Example

Remove the first item: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
?>