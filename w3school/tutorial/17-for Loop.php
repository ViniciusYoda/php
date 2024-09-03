<!-- PHP for Loop

The for loop - Loops through a block of code a specified number of times.
The PHP for Loop

The for loop is used when you know how many times the script should run.
Syntax

for (expression1, expression2, expression3) {
  // code block
}

This is how it works:

    expression1 is evaluated once
    expression2 is evaluated before each iteration
    expression3 is evaluated after each iteration

Example
Get your own PHP Server

Print the numbers from 0 to 10: -->
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
<!-- Example Explained

    The first expression, $x = 0;, is evaluated once and sets a counter to 0.
    The second expression, $x <= 10;, is evaluated before each iteration, and the code block is only executed if this expression evaluates to true. In this example the expression is true as long as $x is less than, or equal to, 10.
    The third expression, $x++;, is evaluated after each iteration, and in this example, the expression increases the value of $x by one at each iteration.

The break Statement

With the break statement we can stop the loop even if the condition is still true:
Example

Stop the loop when $x is 3: -->
<?php
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}
?>
<!-- ADVERTISEMENT
The continue Statement

With the continue statement we can stop the current iteration, and continue with the next:
Example

Stop, and jump to the next iteration if $x is 3: -->
<?php
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) continue;
  echo "The number is: $x <br>";
}
?>
<!-- Step 10

This example counts to 100 by tens:
Example -->
<?php
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>