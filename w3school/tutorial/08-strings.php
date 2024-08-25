<!-- PHP Strings

A string is a sequence of characters, like "Hello world!".
Strings

Strings in PHP are surrounded by either double quotation marks, or single quotation marks. -->

<?php
    echo "Hello";
    echo 'Hello';
?>

<!-- 

Note There is a big difference between double quotes and single quotes in PHP.

Double quotes process special characters, single quotes does not.
Double or Single Quotes?

You can use double or single quotes, but you should be aware of the differences between the two.

Double quoted strings perform action on special characters.

E.g. when there is a variable in the string, it returns the value of the variable:
Example

Double quoted string literals perform operations for special characters: -->

<?php
    $x = "John";
    echo "Hello $x";
?>

<!-- Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
Example

Single quoted string literals returns the string as it is: -->

<?php
    $x = "John";
    echo 'Hello $x';
?>

<!-- String Length

The PHP strlen() function returns the length of a string.
Example

Return the length of the string "Hello world!": -->

<?php
    echo strlen("Hello world!");
?>

<!-- Word Count

The PHP str_word_count() function counts the number of words in a string.
Example

Count the number of word in the string "Hello world!": -->


<?php
    echo str_word_count("Hello world!");
?>

<!-- Search For Text Within a String

The PHP strpos() function searches for a specific text within a string.

If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.
Example

Search for the text "world" in the string "Hello world!": -->

<?php
    echo strpos("Hello world!", "world");
?>

<!-- Tip: The first character position in a string is 0 (not 1). -->