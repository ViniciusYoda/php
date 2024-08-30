<!-- PHP Magic Constants
PHP Predefined Constants

PHP has nine predefined constants that change value depending on where they are used, and therefor they are called "magic constants".

These magic constants are written with a double underscore at the start and the end, except for the ClassName::class constant.
Magic Constants

Here are the magic constants, with descriptions and examples:
Constant 	Description 	
__CLASS__ 	If used inside a class, the class name is returned. 	
__DIR__ 	The directory of the file. 	
__FILE__ 	The file name including the full path. 	
__FUNCTION__ 	If inside a function, the function name is returned. 	
__LINE__ 	The current line number. 	
__METHOD__ 	If used inside a function that belongs to a class, both class and function name is returned. 	
__NAMESPACE__ 	If used inside a namespace, the name of the namespace is returned. 	
__TRAIT__ 	If used inside a trait, the trait name is returned. 	
ClassName::class 	Returns the name of the specified class and the name of the namespace, if any. 	

Note:

The magic constants are case-insensitive, meaning __LINE__ returns the same as __line__. -->

<?php
class Fruits {
  public function myValue(){
    return __CLASS__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

<?php
echo __DIR__;
?>

<?php
echo __FILE__;
?>

<?php
function myValue(){
  return __FUNCTION__;
}
echo myValue();
?>

<?php
echo __LINE__;
?>

<?php
class Fruits2 {
  public function myValue(){
    return __METHOD__;
  }
}
$kiwi = new Fruits2();
echo $kiwi->myValue();
?>

<?php
namespace myArea;

function myValue(){
  return __NAMESPACE__;
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo myValue();
?>

</body>
</html>

<?php
trait message1 {
  public function msg1() {
    echo __TRAIT__; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>

<?php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
?>
<!DOCTYPE html>
<html>
<body>

<?php
$kiwi = new Fruits();
echo $kiwi->myValue();
?>

</body>
</html>
