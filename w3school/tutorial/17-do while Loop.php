<!-- PHP do while Loop

The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
The PHP do...while Loop

The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.
Example
Get your own PHP Server

Print $i as long as $i is less than 6: -->
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>
<!-- Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

Let us see what happens if we set the $i variable to 8 instead of 1, before execute the same do...while loop again:
Example

Set $i = 8, then print $i as long as $i is less than 6: -->
<?php
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);
?>
<!-- The code will be executed once, even if the condition is never true.
ADVERTISEMENT
The break Statement

With the break statement we can stop the loop even if the condition is still true:
Example

Stop the loop when $i is 3: -->
<?php
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
?>
<!-- The continue Statement

With the continue statement we can stop the current iteration, and continue with the next:
Example

Stop, and jump to the next iteration if $i is 3: -->
<?php
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
?>