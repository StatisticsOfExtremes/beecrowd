<?php
/*
 *
Write an algorithm that reads two floating values (x and y), which should represent the coordinates of a point in a plane. Next, determine which quadrant the point belongs, or if you are at one of the Cartesian axes or the origin (x = y = 0).

If the point is at the origin, write the message "Origem".

If the point is at X axis write "Eixo X", else if the point is at Y axis write "Eixo Y".
Input

The input contains the coordinates of a point.
Output

The output should display the quadrant in which the point is.
 */

$input = explode(" ", fgets(STDIN));

//Checagem da origem
if ($input == [0.0,0.0]) {
    echo "Origem\n";
    return;
}

//Verifica se está em algum eixo
if ($input[1] == 0) {
    echo "Eixo X\n";
    return;
}

if ($input[0] == 0) {
    echo "Eixo Y\n";
    return;
}

//SE não está em algum eixo, está no meio de algum quadrante
if ($input[0] > 0) {
    if ($input[1] > 0) {
        echo"Q1\n";
        return;
    }
    echo "Q4\n";
    return;
} else {
    if ($input[1] > 0) {
        echo "Q2\n";
        return;
    }
    echo "Q3\n";
    return;
}