<?php

// Print current date
echo date('d-m-Y H:i:s').'<br>';

// Print yesterday
echo date('d-m-Y H:i:s', time() - 60*60*24).'<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y H:i:s').'<br>';

// Print current timestamp
echo time().'<br>'; //The number of seconds since 01/01/1970

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parseDate = date_parse("2021-08-17 12:00:00");
echo '<pre>';
	var_dump($parseDate);
echo '</pre>';
echo '<br><br>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = "February 4 2022 11:30:20";
$parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
	var_dump($parseDate);
echo '</pre>';
?>
