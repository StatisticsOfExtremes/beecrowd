<?php

namespace PHP\Helper;

$a = "";

while ($line = fgets(STDIN)) {
    $a .= $line;
}

fwrite(STDOUT, $a);
