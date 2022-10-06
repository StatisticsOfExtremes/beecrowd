<?php

$input = explode(" ", fgets(STDIN));

if ($input[0] % 2 == 0) {
    if ($input[2] > 0 && $input[3] > 0) {
        if ($input[1] > $input[2] && $input[3] > $input[0]) {
            if ($input[2] + $input[3] > $input[0] + $input[1] ) {
                echo "Valores aceitos" . "\n";
                return;
            }
        }
    }
}

echo "Valores nao aceitos" ."\n";

?>
