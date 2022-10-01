$num_of_cases = trim(fgets(STDIN));

$spells = [
	'fire' => [200, [20, 30, 50]],
	'water' => [300, [10, 25, 40]],
	'earth' => [400, [25, 55, 70']],
	'air' => [100, [18, 38, 60]]
];


function circle_are($r) {
	return number_format(pi(), 2) * $r^2;
}

function spell_attack() {
	
} 
