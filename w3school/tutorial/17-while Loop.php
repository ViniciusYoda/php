<!-- PHP while Loop

The while loop - Loops through a block of code as long as the specified condition is true.
The PHP while Loop

The while loop executes a block of code as long as the specified condition is true.
Example
Get your own PHP Server

Print $i as long as $i is less than 6: -->
<?php
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}
?>

<!-- Note: remember to increment $i, or else the loop will continue forever.

The while loop does not run a specific number of times, but checks after each iteration if the condition is still true.

The condition does not have to be a counter, it could be the status of an operation or any condition that evaluates to either true or false.
The break Statement

With the break statement we can stop the loop even if the condition is still true:
Example

Stop the loop when $i is 3: -->
<?php
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
}
?>
<!-- ADVERTISEMENT
The continue Statement

With the continue statement we can stop the current iteration, and continue with the next:
Example

Stop, and jump to the next iteration if $i is 3: -->
<?php
$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i;
}
?>
<!-- Alternative Syntax

The while loop syntax can also be written with the endwhile statement like this
Example

Print $i as long as $i is less than 6: -->
<?php
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
?>
<!-- Step 10

If you want the while loop count to 100, but only by each 10, you can increase the counter by 10 instead 1 in each iteration:
Example

Count to 100 by tens: -->
<?php
$i = 0;
while ($i < 100) {
  $i+=10;
  echo $i, "<br>";
}
?>