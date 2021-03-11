<?php

// ============================================
// Associative arrays
// ============================================
// Associative array is a key-value pairs, which is very heavily used in PHP.

// Create an associative array
$person = [
	'name' => 'Ayve',
	'occupation' => 'Student',
	'age' => 24,
	'hobbies' => ['Reading', 'Coding']
];

echo '<pre>';
	var_dump($person);
echo '</pre>';

echo '<pre>';
	print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';
echo $person['address'].'<br>';  //Warning

// Set element by key
$person['channel'] = 'Khairun Nessa Ayve';
echo '<pre>';
	print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if(!isset($person['address'])){
	$person['address'] = 'Unknown';
}

$person['institution'] ??= 'Unknown';

echo '<pre>';
	print_r($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
	var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
	var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);   //sort by keys
echo '<pre>';
	print_r($person);
echo '</pre>';

asort($person);   //sort by values
echo '<pre>';
	print_r($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
	['title'=>'Todo title 1', 'completed'=>true],
	['title'=>'Todo title 2', 'completed'=>false]
];

echo '<pre>';
	var_dump($todos);
echo '</pre>';

?>
