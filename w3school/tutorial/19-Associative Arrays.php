<!-- PHP Associative Arrays

Associative arrays are arrays that use named keys that you assign to them.
Example
Get your own PHP Server -->
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
?>
<!-- Access Associative Arrays

To access an array item you can refer to the key name.
Example

Display the model of the car: -->
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
?>
<!-- Change Value

To change the value of an array item, use the key name:
Example

Change the year item: -->
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
?>
<!-- ADVERTISEMENT
Loop Through an Associative Array

To loop through and print all the values of an associative array, you could use a foreach loop, like this:
Example

Display all array items, keys and values: -->
<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>