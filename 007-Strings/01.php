echo "Hello";
echo 'Hello';

$x = "John";
echo "Hello $x";

$x = "John";
echo 'Hello $x';

echo strlen("Hello world!");

echo str_word_count("Hello world!");

echo strpos("Hello world!", "world");

$x = "Hello World!";
echo strtoupper($x);

Lower Case
Example

The strtolower() function returns the string in lower case:

$x = "Hello World!";
echo strtolower($x);

Replace String

The PHP str_replace() function replaces some characters with some other characters in a string.
Example

Replace the text "World" with "Dolly":

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

Reverse a String

The PHP strrev() function reverses a string.
Example

Reverse the string "Hello World!":

$x = "Hello World!";
echo strrev($x);

Remove Whitespace

Whitespace is the space before and/or after the actual text, and very often you want to remove this space.
Example

The trim() removes any whitespace from the beginning or the end:

$x = " Hello World! ";
echo trim($x);

Convert String into Array

The PHP explode() function splits a string into an array.

The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

Note: The separator is required.
Example

Split the string into an array. Use the space character as separator:

$x = "Hello World!");
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);

/*
Result:
Array ( [0] => Hello [1] => World! )
*/

String Concatenation

To concatenate, or combine, two strings you can use the . operator:
Example
Get your own PHP Server

$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;

The result of the example above is HelloWorld, without a space between the two words.

You can add a space character like this:
Example

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z;

An easier and better way is by using the power of double quotes.

By surrounding the two variables in double quotes with a white space between them, the white space will also be present in the result:
Example

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;

Slicing

You can return a range of characters by using the substr() function.

Specify the start index and the number of characters you want to return.
Example
Get your own PHP Server

Start the slice at index 6 and end the slice 5 positions later:

$x = "Hello World!";
echo substr($x, 6, 5);



Note The first character has index 0.
Slice to the End

By leaving out the length parameter, the range will go to the end:
Example

Start the slice at index 6 and go all the way to the end:

$x = "Hello World!";
echo substr($x, 6);

Slice From the End

Use negative indexes to start the slice from the end of the string:
Example

Get the 3 characters, starting from the "o" in world (index -5):

$x = "Hello World!";
echo substr($x, -5, 3);



Note The last character has index -1.
Negative Length

Use negative length to specify how many characters to omit, starting from the end of the string:
Example

Get the characters starting from the "W" in "World" (index 5) and continue until 3 characters from the end.

Should end up with "Wor":

$x = "Hello World!";
echo substr($x, 5, -3);

Escape Character

To insert characters that are illegal in a string, use an escape character.

An escape character is a backslash \ followed by the character you want to insert.

An example of an illegal character is a double quote inside a string that is surrounded by double quotes:
Example
Get your own PHP Server

$x = "We are the so-called "Vikings" from the north.";

To fix this problem, use the escape character \":
Example

$x = "We are the so-called \"Vikings\" from the north.";

Escape Characters

Other escape characters used in PHP:
Code 	Result 	Try it
\' 	Single Quote 	
\" 	Double Quote 	
\$ 	PHP variables 	
\n 	New Line 	
\r 	Carriage Return 	
\t 	Tab 	
\f 	Form Feed 	
\ooo 	Octal value 	
\xhh 	Hex value