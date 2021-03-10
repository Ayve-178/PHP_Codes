<?php

// Create simple string
$name = 'Ayve';
$string1 = 'Hey there! I am '.$name.'. I am a student.';
$string2 = "Hey there! I am $name. I am a student.";
echo $string1. '<br>';
echo $string2. '<br>';

// String concatenation
echo 'Hello'.' World'.' and PHP'.'<br>';

// String functions
$string = "       Hello World       ";

echo "1 - " . strlen($string).'<br>';
echo "2 - " . trim($string).'<br>';
echo "3 - " . ltrim($string).'<br>';
echo "4 - " . rtrim($string).'<br>';
echo "5 - " . str_word_count($string).'<br>';
echo "6 - " . strrev($string).'<br>';
echo "7 - " . strtoupper($string).'<br>';
echo "8 - " . strtolower($string).'<br>';
echo "9 - " . ucfirst("hello").'<br>';
echo "10 - " . lcfirst("HELLO").'<br>';
echo "11 - " . ucwords('hello world').'<br>';
echo "12 - " . strpos($string, 'world').'<br>';
echo "13 - " . stripos($string, 'world').'<br>';
echo "14 - " . substr($string, 8).'<br>';
echo "15 - " . substr($string, 8, 6).'<br>';
echo "16 - " . str_replace('world', 'php', $string).'<br>'; 
echo "17 - " . str_replace('World', 'php', $string).'<br>';
echo "18 - " . str_ireplace('world', 'php', $string).'<br>';
echo '<br>';

// Multiline text and line breaks
$longText = "
Hey There!
My name is <b>Ayve</b>. 
I am a <b>student</b>. 
I love my <b>mother</b>.
";

echo "A. ".$longText.'<br>';
echo "B. ".nl2br($longText).'<br>';

// Multiline text and reserve html tags
echo "1. ".$longText.'<br>';
echo "2. ".nl2br($longText).'<br>';
echo "3. ".htmlentities($longText).'<br>';
echo "4. ".nl2br(htmlentities($longText)).'<br>';
echo "5. ".html_entity_decode('&lt;b&gt;Ayve&lt;/b&gt;').'<br>';

// More string functions: https://www.php.net/manual/en/ref.strings.php

?>
