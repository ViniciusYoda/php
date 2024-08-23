<!-- PHP echo and print Statements

With PHP, there are two basic ways to get output: echo and print.

In this tutorial we use echo or print in almost every example. So, this chapter contains a little more info about those two output statements.
PHP echo and print Statements

echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
The PHP echo Statement

The echo statement can be used with or without parentheses: echo or echo().
ExampleQ -->

<?php
    echo "Hello";
    //same as:
    echo("Hello");
?>

<!-- Display Text

The following example shows how to output text with the echo command (notice that the text can contain HTML markup):
Example -->

<?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

?>

<!-- Display Variables

The following example shows how to output text and variables with the echo statement: -->

<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    
    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";
    
?>

<!-- Using Single Quotes

Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this: -->

<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    
    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';
    
?>

<!-- The PHP print Statement

The print statement can be used with or without parentheses: print or print(). -->

<?php
    print "Hello";
    //same as:
    print("Hello");
?>

<!-- Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup): -->

<?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    
?>

<!-- 

Display Variables

The following example shows how to output text and variables with the print statement:

-->

<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    
    print "<h2>" . $txt1 . "</h2>";
    print "<p>Study PHP at " . $txt2 . "</p>";
?>

<!-- 

Using Single Quotes

Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:

-->

<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    
    print '<h2>' . $txt1 . '</h2>';
    print '<p>Study PHP at ' . $txt2 . '</p>';
?>

