<!-- Update Array Item

To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
Example
Get your own PHP Server

Change the second array item from "BMW" to "Ford": -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
?>
<!-- Note: The first item has index 0.

To update items from an associative array, use the key name:
Example

Update the year to 2024: -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
?>
<!-- Update Array Items in a Foreach Loop

There are different techniques to use when changing item values in a foreach loop.

One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
Example

Change ALL item values to "Ford": -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
?>
<!-- Note: Remember to add the unset() function after the loop.

Without the unset($x) function, the $x variable will remain as a reference to the last array item.

To demonstrate this, see what happens when we change the value of $x after the foreach loop:
Example

Demonstrate the consequence of forgetting the unset() function: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);
?>