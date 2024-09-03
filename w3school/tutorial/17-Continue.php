<!-- PHP Continue

The continue statement can be used to jump out of the current iteration of a loop, and continue with the next.
Continue in For Loops

The continue statement stops the current iteration in the for loop and continue with the next.
Example
Get your own PHP Server

Move to next iteration if $x = 4: -->
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>
<!-- Continue in While Loop

The continue statement stops the current iteration in the while loop and continue with the next.
Continue Example

Move to next iteration if $x = 4: -->
<?php
$x = 0;

while($x < 10) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>
<!-- ADVERTISEMENT
Continue in Do While Loop

The continue statement stops the current iteration in the do...while loop and continue with the next.
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
<!-- Continue in For Each Loop

The continue statement stops the current iteration in the foreach loop and continue with the next.
Example

Stop, and jump to the next iteration if $x is "blue": -->
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
}
?>