<!-- PHP Constants

Constants are like variables, except that once they are defined they cannot be changed or undefined.
PHP Constants

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.
Create a PHP Constant

To create a constant, use the define() function.
Syntax -->
<?php
define(name, value);
?>
<!-- Parameters:

    name: Specifies the name of the constant
    value: Specifies the value of the constant

Example
Get your own PHP Server

Create a constant with a case-sensitive name: -->
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
<!-- ADVERTISEMENT
PHP const Keyword

You can also create a constant by using the const keyword.
Example

Create a case-sensitive constant with the const keyword: -->
<?php
const MYCAR = "Volvo";
echo MYCAR;
?>
<!-- const vs. define()

    const cannot be created inside another block scope, like inside a function or inside an if statement.
    define can be created inside another block scope.

PHP Constant Arrays

From PHP7, you can create an Array constant using the define() function.
Example

Create an Array constant: -->
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<!-- Constants are Global

Constants are automatically global and can be used across the entire script.
Example

This example uses a constant inside a function, even if it is defined outside the function: -->
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();
?>