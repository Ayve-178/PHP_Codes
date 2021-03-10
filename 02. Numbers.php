<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b . '<br>';  //9
echo $a - $b . '<br>'; //1
echo $a * $b . '<br>'; //20
echo $a + $b * $c. '<br>'; //9.8
echo ($a + $b) * $c. '<br>'; //10.8
echo $a / $b. '<br>'; //1.25
echo $a % $b. '<br>'; //1
echo '<br>';

// Assignment with math operators
$a += $b;
echo $a.'<br>'; //9
echo '<br>';

// Increment operator
echo $a++ . '<br>'; //9
echo ++$a . '<br>'; //11
echo '<br>';

// Decrement operator
echo $a-- . '<br>'; //9
echo --$a . '<br>'; //11
echo '<br>';

// Number checking functions
is_float(1.25);  //true
is_double(2.58);  //true
is_int(12);  //true
is_numeric("3.45"); //true
is_numeric("3g.67"); //false
echo is_numeric(123); //true
echo '<br>';

// Conversion
$strNumber = '12.34';
var_dump($strNumber);
echo '<br>';
$number = (float)$strNumber;
var_dump($number);
$number2 = intval($strNumber);
var_dump($number2);
echo '<br>';

// Number functions
echo abs(-15).'<br>'; //15
echo pow(2,3).'<br>'; //8
echo sqrt(16).'<br>'; //4
echo max(2, 9, 3).'<br>'; //9
echo min(9, 3, 2).'<br>'; //2
echo round(2.4).'<br>'; //2
echo round(2.5).'<br>'; //3
echo floor(2.5).'<br>'; //2
echo ceil(2.3).'<br>'; //3

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, ',', ' '); //123 456 789,12
echo "<br>";
echo number_format($number, 2, '.', ','); //123,456,789.12

//More math functions: https://www.php.net/manual/en/ref.math.php

?>
