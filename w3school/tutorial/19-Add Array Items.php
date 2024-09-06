<!-- Add Array Item

To add items to an existing array, you can use the bracket [] syntax.
Example
Get your own PHP Server

Add one more item to the fruits array: -->
<?php
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";
?>
<!-- Associative Arrays

To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
Example

Add one item to the car array: -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
?>
<!-- Add Multiple Array Items

To add multiple items to an existing array, use the array_push() function.
Example

Add three item to the fruits array: -->
<?php
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
?>
<!-- Add Multiple Items to Associative Arrays

To add multiple items to an existing array, you can use the += operator.
Example

Add two items to the cars array: -->
<?php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
?>