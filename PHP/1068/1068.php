<?php

$temp = fopen('php://stdin', 'r');

while(!feof($temp)) {

	$input = fgets($temp);

	preg_match('/\(/', $input, $matches);
	
	$a = $matches;

	preg_match('/\)/', $input, $matches);

	$b = $matches;
		
	print_r($a);

	print_r($b);

	if (count($a) == count($b)) {
		echo 'correct' . "\n";
	} else 
	{
		echo 'incorrect' . "\n";
	};
}
