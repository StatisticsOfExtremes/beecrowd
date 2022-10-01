<?php

$weights = [2, 3, 4, 1];

$format_mean = 'Media: %.1f';

$format_mean_test = "\nAluno %s.\nMedia final: %.1f\n";
$input = explode(" ", trim(fgets(STDIN)));


$wsum = 0;
	
foreach($input as $key=>$value) {
	$wsum += $value * $weights[$key];	
}

$wmean = $wsum / array_sum($weights);

echo sprintf($format_mean, $wmean) . "\n";

if ($wmean < 5.0) {
	echo "Aluno reprovado.\n";
	return;
}


if ($wmean >= 7.0) {
	echo "Aluno aprovado.\n";
	return;
}

echo "Aluno em exame.\n";

$exame_input = trim(fgets(STDIN));

echo "Nota do exame: $exame_input";

echo (($exame_input + $wmean) / 2) >= 5 ?
	sprintf($format_mean_test, "aprovado", ($exame_input + $wmean) / 2) :
	sprintf($format_mean_test, "reprovado", ($exame_input + $wmean) / 2);

