<!-- PHP $GLOBALS

$GLOBALS is an array that contains all global variables.
Global Variables

Global variables are variables that can be accessed from any scope.

Variables of the outer most scope are automatically global variables, and can be used by any scope, e.g. inside a function.

To use a global variable inside a function you have to either define them as global with the global keyword, or refer to them by using the $GLOBALS syntax.
Example
Get your own PHP Server

Refer to the global variable $x inside a function: -->
<?php
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>
<!-- This is different from other programming languages where global variables are available without specifically referring to them as global.
Example

In PHP you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax: -->
<?php
$x = 75;
  
function myfunction2() {
  // echo $x;
}

myfunction2()
?>
<!-- You can also refer to global variables inside functions by defining them as global with the global keyword.
Example

Define $x as global inside a function: -->
<?php
$x = 75;
  
function myfunction3() {
  global $x;
  echo $x;
}

myfunction3()
?>
<!-- Create Global Variables

Variables created in the outer most scope are global variables either if they are created using the $GLOBALS syntax or not:
Example -->
<?php
$x = 100;

echo $GLOBALS["x"];
echo $x;
?>
<!-- Variables created inside a function belongs only to that function, but you can create global variables inside a function by using the $GLOBALS syntax:
Example

Create a global variable from inside a function, and use it outside of the function: -->
<?php
function myfunction4() {
  $GLOBALS["x"] = 100;
}

myfunction4();

echo $GLOBALS["x"];
echo $x;
?>