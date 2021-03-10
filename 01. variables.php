<?php

// Variable types
/*
String, Integer, Float/Double, Boolean, Null, Array. Object, Resources
*/

// Declare variables
$name = 'Khairun Nessa Ayve';
$age = 23;
$isFemale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isFemale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isFemale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo "<br>";

// Print the whole variable
var_dump($name, $age, $isFemale, $height, $salary);
echo "<br>";

// Change the value of the variable
$name = false;
echo "<br>";

// Print type of the variable
echo gettype($name).'<br>';
echo '<br>';

// Variable checking functions
echo is_string($name).'<br>'; //false
echo is_int($age).'<br>'; //true
echo is_bool($isFemale).'<br>'; //true
echo is_double($height).'<br>'.'<br>'; //true
echo '<br>';

// Check if variable is defined
echo isset($name).'<br>'; //true
echo isset($address).'<br>'; //true

// Constants
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

?>
