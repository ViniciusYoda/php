<!-- PHP Arrays

An array stores multiple values in one single variable:
Example
Get your own PHP Server -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
?>
<!-- What is an Array?

An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
PHP Array Types

In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

Working With Arrays

In this tutorial you will learn how to work with arrays, including:

    Create Arrays
    Access Arrays
    Update Arrays
    Add Array Items
    Remove Array Items
    Sort Arrays

Array Items

Array items can be of any data type.

The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

You can have different data types in the same array.
Example

Array items of four different data types: -->
<?php
// $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
?>
<!-- Array Functions

The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
Example

How many items are in the $cars array: -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>