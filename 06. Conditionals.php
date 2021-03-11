<?php

$age = 20;
$salary = 300000;

// Sample if
if($age===20){
	echo 1;
}

// Without circle braces
if($age===20)	echo 1;

// Sample if-else
if($age > 20){
	echo 1;
} else{
	echo 2;
}

// Difference between == and ===
//In == only values are checked.
if($age==20){         //true
	echo "1".'<br>';
}

if($age=='20'){        //true
	echo "2".'<br>';
}

//In === not only values, also type of variables also checked.
if($age===20){          //true
	echo "3".'<br>';
}

if($age==='20'){         //false
	echo "4".'<br>';
}
// if AND
if($age > 20 && $salary===300000){   //false
	echo "This is not right<br>";
}

// if OR
if($age > 20 || $salary===300000){   //true
	echo "This is right<br>";
}

// Ternary if
echo $age<22 ? 'young' : 'old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
	var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'Ayve';
//Another way:
//$myName = $name ?? 'Ayve';
echo $myName;

// switch
$userRole = 'admin';   //editor, user, admin

switch ($userRole) {
	case 'admin':
		echo 'admin';
		break;

	case 'editor':
		echo 'editor';
		break;

	case 'user':
		echo 'user';
		break;
	
	default:
		echo 'Invalid Role';
		break;
}

?>
