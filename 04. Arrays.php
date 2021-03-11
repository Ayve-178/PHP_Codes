<?php

// Create array
$fruits = ['Mango', 'Banana', 'Apple'];

// Print the whole array
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Orange';

echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]); //true
isset($fruits[3]); //false

// Append element
$fruits[] = 'Peach';
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Strawberry');
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Blueberry');
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana,Apple,Orange";
echo '<pre>';
	var_dump(explode(',', $string));
echo '</pre>';

// Combine array elements into string
echo implode("-", $fruits);

// Check if element exist in the array
echo '<pre>';
	var_dump(in_array('Apple', $fruits));
echo '</pre>';

echo '<pre>';
	var_dump(in_array('Berry', $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
	var_dump(array_search('Apple', $fruits));
echo '</pre>';

echo '<pre>';
	var_dump(array_search('Berry', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ['Potato', 'Tomato'];
echo '<pre>';
	var_dump(array_merge($vegetables, $fruits));
	var_dump(...$fruits,...$vegetables);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);
echo '<pre>';
	var_dump($fruits);
echo '</pre>';

rsort($fruits);  //Reverse sort
echo '<pre>';
	var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

?>
