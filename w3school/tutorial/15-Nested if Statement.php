<!-- PHP Nested if Statement
Nested If

You can have if statements inside if statements, this is called nested if statements.
Example
Get your own PHP Server

An if inside an if: -->
<?php
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
?>