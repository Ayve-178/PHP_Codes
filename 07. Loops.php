<?php

// while
// while(true){

// }

// Loop with $counter
$counter = 0;
while($counter<10){
	echo $counter.'<br>';
	if($counter==5)
		break;
	$counter++;
}
echo '<br>';

// do - while
$counter = 0;
do{
	echo $counter.'<br>';
	$counter++;
}while($counter<10);
echo '<br><br>';

// for
for($i=0; $i<10; $i++){
	echo $i.'<br>';
}
echo '<br><br>';

// foreach
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as $fruit) {
	echo $fruit.'<br>';
}

echo '<br><br>';

foreach ($fruits as $i => $fruit) {
	echo $i." ".$fruit.'<br>';
}
echo '<br><br>';

// Iterate Over associative array.
$person = [
	'name' => 'Ayve',
	'occupation' => 'Student',
	'age' => 24,
	'hobbies' => ['Reading', 'Coding']
];
foreach ($person as $key => $value) {
	if(is_array($value)){
		echo $key.' '.implode(",", $value).'<br>';
	} else{
		echo $key.' '.$value.'<br>';
	}
}
?>
