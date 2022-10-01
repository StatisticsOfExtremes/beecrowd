<?php
$spells = [
	"fire" => [200, [20, 30, 50]],
	"water" => [300, [10, 25, 40]],
	"earth" => [400, [25, 55, 70]],
	"air" => [100, [18, 38, 60]]
];

function array_add(array $arr1, array $arr2) {
	return array_map(fn($a, $b) => $a + $b, $arr1, $arr2);
}

function contains($area, $point) {
	foreach($area as $ponto) {
		if ($ponto[0] <= $point[0] && $ponto[1] <= $point[1]) {
			return True;
		}
	}
	return False;
}

function create_area($center, $constant) {
	return array(
		[$center[0] + $constant, $center[1]],
		[$center[0], $center[1] + $constant],
		[$center[0] - $constant, $center[1]],
		[$center[0], $center[1] - $constant]
	);
}


$num_of_cases = trim(fgets(STDIN));


for($k = 0; $k < $num_of_cases; $k++) {

	$enemy_data = explode(" ", fgets(STDIN));

	$enemy_size = array_slice($enemy_data, 0, 2);

	$enemy_location = array_slice($enemy_data, 2);

	$atk_data = explode(" ", fgets(STDIN));

	$atk_lvl = $atk_data[1];

	$atk_area = create_area(
		array_slice($atk_data, 2),
		$spells[$atk_data[0]][1][$atk_lvl - 1]	
	); 

	if (contains($atk_area, array_add($enemy_location, $enemy_size))) 
	{
		echo $spells[$atk_data[0]][0] . "\n";
	}
	else 
	{
		echo 0 . "\n";
	}
}
 
