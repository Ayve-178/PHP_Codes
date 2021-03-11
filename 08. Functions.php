<?php

// Function which prints "Hello I am Zura"
function hello(){
	echo "Hello! I am Ayve!!<br>";
}
hello();

// Function with argument
function hey($name){
	echo "Hello! I am $name!!<br>";
}
hey('Arobi');

// Create sum of two functions
function sum($a, $b){
	return $a + $b;
}
echo sum(4,5).'<br>';

// Create function to sum all numbers using ...$nums
function sums(...$nums){
	// echo '<pre>';
	// 	var_dump($nums);
	// echo '</pre>';
	$sum = 0;
	foreach ($nums as $n) {
		$sum += $n;
	}
	return $sum;
}
echo sums(1,2,3,4,5,6,7);
echo '<br>';

// Arrow functions
function arrow_sum(...$nums){
	return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo arrow_sum(1,2,3,4,5,6,7);

?>
