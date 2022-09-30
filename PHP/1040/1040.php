<?php

$weights = [2, 3, 4, 1];

$input = explode(" ", trim(fgets(STDIN)));

$wsum = 0;
	
foreach($input as $key=>$value) {
	$wsum = $value * $weights[$key];	
}

$wmean = $wsum / array_sum($weights);

echo "Media: $wmean\n";

if ($wmean < 5.0) {
	echo "Aluno reprovado.\n";
	return;
}


if ($wmean >= 7.0) {
	echo "Aluno aprovado\n";
	return;
}

echo "Aluno em exame.\n";

$exame_input = trim(fgets(STDIN));

echo "Nota do exame: $exame_input";

echo (($exame_input + $wmean) / 2) >= 5 ?
	 "Aluno aprovado.\nMedia final: {($exame_input + $wmean) / 2}\n":
	 "Aluno reprovado.\nMedia final: {($exame_input + $wmean) / 2}\n";

