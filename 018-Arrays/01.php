An array stores multiple values in one single variable:
Example
Get your own PHP Server

$cars = array("Volvo", "BMW", "Toyota");

What is an Array?

An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.
PHP Array Types

In PHP, there are three types of arrays:

    Indexed arrays - Arrays with a numeric index
    Associative arrays - Arrays with named keys
    Multidimensional arrays - Arrays containing one or more arrays

Working With Arrays

In this tutorial you will learn how to work with arrays, including:

    Create Arrays
    Access Arrays
    Update Arrays
    Remove Array Items
    Sort Arrays

Array Items

Array items can be of any data type.

The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.

You can have different data types in the same array.
Example

Array items of four different data types:

$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);

Array Functions

The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
Example

How many items are in the $cars array:

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

PHP Indexed Arrays

In indexed arrays each item has an index number.

By default, the first item has index 0, the second item has item 1, etc.
Example
Get your own PHP Server

Create and display an indexed array:

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

Access Indexed Arrays

To access an array item you can refer to the index number.
Example

Display the first array item:

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];

Change Value

To change the value of an array item, use the index number:
Example

Change the value of the second item:

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);

Loop Through an Indexed Array

To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
Example

Display all array items:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

For a complete reference of all array functions, go to our complete PHP Array Reference.
ADVERTISEMENT
Index Number

The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.

New items get the next index number, meaning one higher than the highest existing index.

So if you have an array like this:

$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

And if you use the array_push() function to add a new item, the new item will get the index 3:
Example

array_push($cars, "Ford");
var_dump($cars);

But if you have an array with random index numbers, like this:

$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

And if you use the array_push() function to add a new item, what will be the index number of the new item?
Example

array_push($cars, "Ford");
var_dump($cars);

PHP Associative Arrays

Associative arrays are arrays that use named keys that you assign to them.
Example
Get your own PHP Server

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

Access Associative Arrays

To access an array item you can refer to the key name.
Example

Display the model of the car:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

Change Value

To change the value of an array item, use the key name:
Example

Change the year item:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);

ADVERTISEMENT
Loop Through an Associative Array

To loop through and print all the values of an associative array, you could use a foreach loop, like this:
Example

Display all array items, keys and values:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

Create Array

You can create arrays by using the array() function:
Example
Get your own PHP Server

$cars = array("Volvo", "BMW", "Toyota");

You can also use a shorter syntax by using the [] brackets:
Example

$cars = ["Volvo", "BMW", "Toyota"];

Multiple Lines

Line breaks are not important, so an array declaration can span multiple lines:
Example

$cars = [
  "Volvo",
  "BMW",
  "Toyota"
];

Trailing Comma

A comma after the last item is allowed:
Example

$cars = [
  "Volvo",
  "BMW",
  "Toyota",
];

Array Keys

When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
Example

$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];

As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
Example

$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

Declare Empty Array

You can declare an empty array first, and add items to it later:
Example

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

The same goes for associative arrays, you can declare the array first, and then add items to it:
Example

$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

Mixing Array Keys

You can have arrays with both indexed and named keys:
Example

$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

Access Array Item

To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
Example
Get your own PHP Server

Access an item by referring to its index number:

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

Note: The first item has index 0.

To access items from an associative array, use the key name:
Example

Access an item by referring to its key name:

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

Double or Single Quotes

You can use both double and single quotes when accessing an array:
Example

echo $cars["model"];
echo $cars['model'];

Excecute a Function Item

Array items can be of any data type, including function.

To execute such a function, use the index number followed by parentheses ():
Example

Execute a function item:

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();

Use the key name when the function is an item in a associative array:
Example

Execute function by referring to the key name:

function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();

Loop Through an Associative Array

To loop through and print all the values of an associative array, you can use a foreach loop, like this:
Example

Display all array items, keys and values:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}

Loop Through an Indexed Array

To loop through and print all the values of an indexed array, you can use a foreach loop, like this:
Example

Display all array items:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x <br>";
}

Update Array Item

To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
Example
Get your own PHP Server

Change the second array item from "BMW" to "Ford":

$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";

Note: The first item has index 0.

To update items from an associative array, use the key name:
Example

Update the year to 2024:

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;

Update Array Items in a Foreach Loop

There are different techniques to use when changing item values in a foreach loop.

One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
Example

Change ALL item values to "Ford":

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);

Note: Remember to add the unset() function after the loop.

Without the unset($x) function, the $x variable will remain as a reference to the last array item.

To demonstrate this, see what happens when we change the value of $x after the foreach loop:
Example

Demonstrate the consequence of forgetting the unset() function:

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);

Remove Array Item

To remove an existing item from an array, you can use the unset() function.

The unset() function deletes specified variables, and can therefor be used to delete array items:
Example
Get your own PHP Server

Remove the second item:

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);

Remove Multiple Array Items

The unset() function takes a unlimited number of arguments, and can therefor be used to delete multiple array items:
Example

Remove the first and the second item:

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

Note: The unset() function will NOT re-arrange the indexes, and the examples above will no longer contain the missing indexes.
Using the array_splice Function

If you want the array to re-arrange the indexes, you can use the array_splice() function.

With the array_splice() function you specify the index (where to start) and how many items you want to delete.
Example

Remove the second item:

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);

After the deletion, the array gets reindexed automtically, starting at index 0.
Remove Item From an Associative Array

To remove items from an associative array, you can use unset() function like before, but referring to the key name instead of index.
Example

Remove the "model":

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);

The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
PHP - Sort Functions For Arrays

In this chapter, we will go through the following PHP array sort functions:

    sort() - sort arrays in ascending order
    rsort() - sort arrays in descending order
    asort() - sort associative arrays in ascending order, according to the value
    ksort() - sort associative arrays in ascending order, according to the key
    arsort() - sort associative arrays in descending order, according to the value
    krsort() - sort associative arrays in descending order, according to the key

Sort Array in Ascending Order - sort()

The following example sorts the elements of the $cars array in ascending alphabetical order:
Example
Get your own PHP Server

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

The following example sorts the elements of the $numbers array in ascending numerical order:
Example

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

ADVERTISEMENT
Sort Array in Descending Order - rsort()

The following example sorts the elements of the $cars array in descending alphabetical order:
Example

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

The following example sorts the elements of the $numbers array in descending numerical order:
Example

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

Sort Array (Ascending Order), According to Value - asort()

The following example sorts an associative array in ascending order, according to the value:
Example

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

Sort Array (Ascending Order), According to Key - ksort()

The following example sorts an associative array in ascending order, according to the key:
Example

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

Sort Array (Descending Order), According to Value - arsort()

The following example sorts an associative array in descending order, according to the value:
Example

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

Sort Array (Descending Order), According to Key - krsort()

The following example sorts an associative array in descending order, according to the key:
Example

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

Complete PHP Array Reference

For a complete reference of all array functions, go to our complete PHP Array Reference.

The reference contains a brief description, and examples of use, for each function!

In the previous pages, we have described arrays that are a single list of key/value pairs.

However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
PHP - Multidimensional Arrays

A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

The dimension of an array indicates the number of indices you need to select an element.

    For a two-dimensional array you need two indices to select an element
    For a three-dimensional array you need three indices to select an element

PHP - Two-dimensional Arrays

A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).

First, take a look at the following table:
Name 	Stock 	Sold
Volvo 	22 	18
BMW 	15 	13
Saab 	5 	2
Land Rover 	17 	15

We can store the data from the table above in a two-dimensional array, like this:

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.

To get access to the elements of the $cars array we must point to the two indices (row and column):
Example
Get your own PHP Server

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
Example

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}

Complete PHP Array Reference

For a complete reference of all array functions, go to our complete PHP Array Reference.

The reference contains a brief description, and examples of use, for each function!

PHP Array Functions

PHP has a set of built-in functions that you can use on arrays.
Function 	Description
array() 	Creates an array
array_change_key_case() 	Changes all keys in an array to lowercase or uppercase
array_chunk() 	Splits an array into chunks of arrays
array_column() 	Returns the values from a single column in the input array
array_combine() 	Creates an array by using the elements from one "keys" array and one "values" array
array_count_values() 	Counts all the values of an array
array_diff() 	Compare arrays, and returns the differences (compare values only)
array_diff_assoc() 	Compare arrays, and returns the differences (compare keys and values)
array_diff_key() 	Compare arrays, and returns the differences (compare keys only)
array_diff_uassoc() 	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
array_diff_ukey() 	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
array_fill() 	Fills an array with values
array_fill_keys() 	Fills an array with values, specifying keys
array_filter() 	Filters the values of an array using a callback function
array_flip() 	Flips/Exchanges all keys with their associated values in an array
array_intersect() 	Compare arrays, and returns the matches (compare values only)
array_intersect_assoc() 	Compare arrays and returns the matches (compare keys and values)
array_intersect_key() 	Compare arrays, and returns the matches (compare keys only)
array_intersect_uassoc() 	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
array_intersect_ukey() 	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
array_key_exists() 	Checks if the specified key exists in the array
array_keys() 	Returns all the keys of an array
array_map() 	Sends each value of an array to a user-made function, which returns new values
array_merge() 	Merges one or more arrays into one array
array_merge_recursive() 	Merges one or more arrays into one array recursively
array_multisort() 	Sorts multiple or multi-dimensional arrays
array_pad() 	Inserts a specified number of items, with a specified value, to an array
array_pop() 	Deletes the last element of an array
array_product() 	Calculates the product of the values in an array
array_push() 	Inserts one or more elements to the end of an array
array_rand() 	Returns one or more random keys from an array
array_reduce() 	Returns an array as a string, using a user-defined function
array_replace() 	Replaces the values of the first array with the values from following arrays
array_replace_recursive() 	Replaces the values of the first array with the values from following arrays recursively
array_reverse() 	Returns an array in the reverse order
array_search() 	Searches an array for a given value and returns the key
array_shift() 	Removes the first element from an array, and returns the value of the removed element
array_slice() 	Returns selected parts of an array
array_splice() 	Removes and replaces specified elements of an array
array_sum() 	Returns the sum of the values in an array
array_udiff() 	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
array_udiff_assoc() 	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_udiff_uassoc() 	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
array_uintersect() 	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
array_uintersect_assoc() 	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
array_uintersect_uassoc() 	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
array_unique() 	Removes duplicate values from an array
array_unshift() 	Adds one or more elements to the beginning of an array
array_values() 	Returns all the values of an array
array_walk() 	Applies a user function to every member of an array
array_walk_recursive() 	Applies a user function recursively to every member of an array
arsort() 	Sorts an associative array in descending order, according to the value
asort() 	Sorts an associative array in ascending order, according to the value
compact() 	Create array containing variables and their values
count() 	Returns the number of elements in an array
current() 	Returns the current element in an array
each() 	Deprecated from PHP 7.2. Returns the current key and value pair from an array
end() 	Sets the internal pointer of an array to its last element
extract() 	Imports variables into the current symbol table from an array
in_array() 	Checks if a specified value exists in an array
key() 	Fetches a key from an array
krsort() 	Sorts an associative array in descending order, according to the key
ksort() 	Sorts an associative array in ascending order, according to the key
list() 	Assigns variables as if they were an array
natcasesort() 	Sorts an array using a case insensitive "natural order" algorithm
natsort() 	Sorts an array using a "natural order" algorithm
next() 	Advance the internal array pointer of an array
pos() 	Alias of current()
prev() 	Rewinds the internal array pointer
range() 	Creates an array containing a range of elements
reset() 	Sets the internal pointer of an array to its first element
rsort() 	Sorts an indexed array in descending order
shuffle() 	Shuffles an array
sizeof() 	Alias of count()
sort() 	Sorts an indexed array in ascending order
uasort() 	Sorts an array by values using a user-defined comparison function and maintains the index association
uksort() 	Sorts an array by keys using a user-defined comparison function
usort() 	Sorts an array by values using a user-defined comparison function

