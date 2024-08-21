<!-- PHP Multiline Comments
Multi-line Comments

Multi-line comments start with /* and end with */.

Any text between /* and */ will be ignored.

The following example uses a multi-line comment as an explanation:
Example
Get your own PHP Server

Multi-line comment as an explanation:

/*
The next statement will
print a welcome message
*/ -->

echo "Welcome Home!";

<!-- Multi-line Comments to Ignore Code

We can use multi-line comments to prevent blocks of code from being executed:
Example

Multi-line comment to ignore code:

/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/ -->

echo "Hello!";

<!-- Comments in the Middle of the Code

The multi-line comment syntax can also be used to prevent execution of parts inside a code-line:
Example

The  + 15 part will be ignored in the calculation: -->

$x = 5 /* + 15 */ + 5;
echo $x;
