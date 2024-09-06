<!-- PHP $_POST

$_POST contains an array of variables received via the HTTP POST method.

There are two main ways to send variables via the HTTP Post method:

    HTML forms
    JavaScript HTTP requests

$_POST in HTML Forms

A HTML form submits information via the HTTP POST method if the form's method attribute is set to "POST".

To demonstrate this, we start by creating a simple HTML form:

HTML Form -->

<html>
<body>

<form method="POST" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>

<!-- When a user clicks the submit button, the form data is sent to a PHP file specified in the action attribute of the <form> tag.

In the action file we can use the $_POST variable to collect the value of the input field.

PHP file -->
<?php
$name = $_POST['fname'];
echo $name;
?>
<!-- In the example below we have put the HTML form and PHP code in the same PHP file.

We have also added some extra lines for security.
Example
Get your own PHP Server -->

<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

<!-- $_POST in JavaScript HTTP Requests

When sending a HTTP request in JavaScript, you can specify that the HTTP method is POST.

To demonstrate this we start by creating a JavaScript function containing a HTTP request:

JavaScript function -->
<?php
// function myfunction() {
//   const xhttp = new XMLHttpRequest();
//   xhttp.open("POST", "demo_phpfile.php");
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.onload = function() {
//     document.getElementById("demo").innerHTML = this.responseText;
//   }
//   xhttp.send("fname=Mary");
//   }
// }
?>
<!-- The code above will:

    Intiate a HTTP request
    Set the HTTP method to POST
    Set a valid request header
    Create a function to execute when the request is done
    Send the HTTP request with a variable fname set to Mary

Look at the function that will be executed when the request is done: -->
<?php
// xhttp.onload = function() {
//     document.getElementById("demo").innerHTML = this.responseText;
//   }
?>
<!-- It will try to write a response from the operation in a HTML element with id="demo".

Let us make a HTML page with such element, and also a button that executes the function.

If we also add the the JavaScript, the page looks like this:
Example

How to post and receive data from a HTTP request: -->

<html>
<script>
function myfunction() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "demo_ajax.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.onload = function() {
    document.getElementById("demo").innerHTML = this.responseText;
  }
  xhttp.send("fname=Mary");
  }

</script>
<body>

<button onclick="myfunction()">Click me!</button>

<h1 id="demo"></h1>

</body>
</html>

<!-- In the PHP file that receive this HTTP request (demo_ajax.php), we simply use the $_POST variable to retrieve the fname variable, and writes it as a response.

PHP file -->
<?php
$name = $_POST['fname'];
echo $name;
?>
