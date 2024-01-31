Constants are like variables, except that once they are defined they cannot be changed or undefined.
PHP Constants

A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.
Create a PHP Constant

To create a constant, use the define() function.
Syntax

define(name, value, case-insensitive);

Parameters:

    name: Specifies the name of the constant
    value: Specifies the value of the constant
    case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

Example
Get your own PHP Server

Create a constant with a case-sensitive name:

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

Example

Create a constant with a case-insensitive name:

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

ADVERTISEMENT
PHP const Keyword

You can also create a constant by using the const keyword.
Example

Create a constant with the const keyword:

const MYCAR = "Volvo";
echo MYCAR;

const vs. define()

    const are always case-sensitive
    define() has has a case-insensitive option.
    const cannot be created inside another block scope, like inside a function or inside an if statement.
    define can be created inside another block scope.

PHP Constant Arrays

From PHP7, you can create an Array constant using the define() function.
Example

Create an Array constant:

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];

Constants are Global

Constants are automatically global and can be used across the entire script.
Example

This example uses a constant inside a function, even if it is defined outside the function:

define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();
