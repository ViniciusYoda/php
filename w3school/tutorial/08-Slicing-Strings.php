<!-- Slicing

You can return a range of characters by using the substr() function.

Specify the start index and the number of characters you want to return.
Example
Get your own PHP Server

Start the slice at index 6 and end the slice 5 positions later: -->

<?php
$x = "Hello World!";
echo substr($x, 6, 5);
?>
<!-- 
Note The first character has index 0.
Slice to the End

By leaving out the length parameter, the range will go to the end:
Example

Start the slice at index 6 and go all the way to the end: -->

<?php
$x = "Hello World!";
echo substr($x, 6);
?>
<!-- Slice From the End

Use negative indexes to start the slice from the end of the string:
Example

Get the 3 characters, starting from the "o" in world (index -5): -->
<?php
$x = "Hello World!";
echo substr($x, -5, 3);
?>
<!-- 
Note The last character has index -1.
Negative Length

Use negative length to specify how many characters to omit, starting from the end of the string:
Example

From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).

Should end up with "ow are y": -->
<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>
