<!-- PHP if Statements

Conditional statements are used to perform different actions based on different conditions.
PHP Conditional Statements

Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

    if statement - executes some code if one condition is true
    if...else statement - executes some code if a condition is true and another code if that condition is false
    if...elseif...else statement - executes different codes for more than two conditions
    switch statement - selects one of many blocks of code to be executed

PHP - The if Statement

The if statement executes some code if one condition is true.
Syntax

if (condition) {
  // code to be executed if condition is true;
}

Example
Get your own PHP Server -->

<!-- Output "Have a good day!" if 5 is larger than 3: -->
<?php
if (5 > 3) {
  echo "Have a good day!";
}
?>

<!-- We can also use variables in the if statement:
Example

Output "Have a good day!" if $t is less than 20: -->
<?php
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
?>
