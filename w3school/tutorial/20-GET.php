<!-- PHP $_GET

$_GET contains an array of variables received via the HTTP GET method.

There are two main ways to send variables via the HTTP GET method:

    Query strings in the URL
    HTML Forms

Query string in the URL

A query string is data added at the end of a URL. In the link below, everything after the ? sign is part of the query string:

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>

The query string above contains two key/value pairs:

subject=PHP
web=W3schools.com

In the PHP file we can use the $_GET variable to collect the value of the query string.
Example
Get your own PHP Server

The PHP file demo_phpfile.php: -->

<html>
<body>

<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>

</body>
</html>

<!-- $_GET in HTML Forms

A HTML form submits information via the HTTP GET method if the form's method attribute is set to "GET".

To demonstrate this, we start by creating a simple HTML form:

HTML Form -->

<html>
<body>

<form action="welcome_get.php" method="GET">
  Name: <input type="text" name="name">
  E-mail: <input type="text" name="email">
  <input type="submit">
</form>

</body>
</html>

<!-- When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.

The form fields are sent to the PHP file, with your input, as query strings:

welcome_get.php?name=John&email=john@example.com

In the action file we can use the $_GET variable to collect the value of the input fields.
Example

PHP code inside the welcome_get.php page: -->

<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>

<!-- Think SECURITY when processing PHP forms!

The example above does not contain any form validation, it just shows how you can send and retrieve form data.

Learn more about processing PHP forms with security in mind in the Form Validation chapter.

Proper validation of form data is important to protect your form from hackers and spammers! -->
