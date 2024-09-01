<!-- PHP if Operators
Comparison Operators

If statements usually contain conditions that compare two values.
Example
Get your own PHP Server

Check if $t is equal to 14: -->
<?php
$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}
?>
<!-- To compare two values, we need to use a comparison operator.

Here are the PHP comparison operators to use in if statements:
Operator 	Name 	Result 	Try it
== 	Equal 	Returns true if the values are equal 	
=== 	Identical 	Returns true if the values and data types are identical 	
!= 	Not equal 	Returns true if the values are not equal 	
<> 	Not equal 	Returns true if the values are not equal 	
!== 	Not identical 	Returns true if the values or data types are not identical 	
> 	Greater than 	Returns true if the first value is greater than the second value 	
< 	Less than 	Returns true if the first value is less than the second value 	
>= 	Greater than or equal to 	Returns true if the first value is greater than, or equal to, the second value 	
<= 	Less than or equal to 	Returns true if the first value is less than, or equal to, the second value 	
Logical Operators

To check more than one condition, we can use logical operators, like the && operator:
Example -->

<!-- Check if $a is greater than $b, AND if $a is less than $c: -->
<?php
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}
?>
<!-- Here are the PHP logical operators to use in if statements:
Operator 	Name 	Description 	Try it
and 	And 	True if both conditions are true 	
&& 	And 	True if both conditions are true 	
or 	Or 	True if either condition is true 	
|| 	Or 	True if either condition is true 	
xor 	Xor 	True if either condition is true, but not both 	
! 	Not 	True if condition is not true 	

We can compare as many conditions as we like in one if statement:
Example

Check if $a is either 2, 3, 4, 5, 6, or 7: -->
<?php
$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
?>
