<!-- Escape Character

To insert characters that are illegal in a string, use an escape character.

An escape character is a backslash \ followed by the character you want to insert.

An example of an illegal character is a double quote inside a string that is surrounded by double quotes:
Example
Get your own PHP Server -->

<?php
$x = "We are the so-called"; //"Vikings" from the north.";
?>
<!-- To fix this problem, use the escape character \":
Example -->
<?php
$x = "We are the so-called \"Vikings\" from the north.";
?>
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