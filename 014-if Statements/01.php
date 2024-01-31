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
Get your own PHP Server

Output "Have a good day!" if 5 is larger than 3:

if (5 > 3) {
  echo "Have a good day!";
}

We can also use variables in the if statement:
Example

Output "Have a good day!" if $t is less than 20:

$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

Comparison Operators

If statements usually contain conditions that compare two values.
Example
Get your own PHP Server

Check if $t is equal to 14:

$t = 14;

if ($t == 14) {
  echo "Have a good day!";
}

To compare two values, we need to use a comparison operator.

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
Example

Check if $a is greater than $b, AND if $a is less than $c:

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $c < $a ) {
  echo "Both conditions are true";
}

Here are the PHP logical operators to use in if statements:
Operator 	Name 	Description 	Try it
and 	And 	True if both conditions are true 	
&& 	And 	True if both conditions are true 	
or 	Or 	True if either condition is true 	
|| 	Or 	True if either condition is true 	
xor 	Xor 	True if either condition is true, but not both 	
! 	Not 	True if condition is not true 	

We can compare as many conditions as we like in one if statement:
Example

Check if $a is either 2, 3, 4, 5, 6, or 7:

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}


PHP - The if...else Statement

The if...else statement executes some code if a condition is true and another code if that condition is false.
Syntax

if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
}

Example
Get your own PHP Server

Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

PHP - The if...elseif...else Statement

The if...elseif...else statement executes different codes for more than two conditions.
Syntax

if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  // code to be executed if first condition is false and this condition is true;
} else {
  // code to be executed if all conditions are false;
}

Example

Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

Short Hand If

To write shorter code, you can write if statements on one line.
Example
Get your own PHP Server

One-line if statement:

$a = 5;

if ($a < 10) $b = "Hello";

echo $b

Short Hand If...Else

if...else statements can also be written in one line, but the syntax is a bit different.
Example

One-line if...else statement:

$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;

This technique is known as Ternary Operators, or Conditional Expressions.

Nested If

You can have if statements inside if statements, this is called nested if statements.
Example
Get your own PHP Server

An if inside an if:

$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
