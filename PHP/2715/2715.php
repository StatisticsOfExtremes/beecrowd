<?php
/*
We finally got to the end of the semester and as expected there is a lot of homework to do! Willing to help (or not really), professors decided the assignments will be done in pairs and they would also inform what is the degree of difficulty of each assignment.

Considering that, Rangel, our old friend, chose Gugu as his partner, knowing how responsible he is. Keeping in mind that both are really busy they decided to split their assignments according to the following criteria:

The sequence in which each assignment is done cannot be changed during the splitting;

The splitting needs to be fair, therefore, minimizing the difference among the assignments done by Rangel and Gugu;

Rangel always does the first assignments and Gugu takes care of the remaining.

Because both of them are really busy at the library getting the books to work on their assignments, they asked you to determine the difference.
Input

Each file contains several case tests. The first line for each case contains an integer N (1 ≤ N  ≤ 106) which indicates the number of elements in the sequence, and the second line contains N integers where each integer has a value X (1 ≤ X ≤ 105).

The input ends with end-of-file (EOF).
Output

For each case test, an integer Y must be printed, where Y is the value of the optimum difference following the previously mentioned criteria. Leave a blank line after each test case, including the last one.
*/

$input = [];
while ($line = fgets(STDIN)) {

};


print_r($input);
/*
for($i = 0; $i < count($input) - 1; $i = $i + 2) {
    //gets the last item

    $arr = explode(" ", trim($input[$i + 1]));

    $max = max($arr);

    $ind_max = 0;

    for ($k = 0; $k < count($arr) - 1; $k++) {
        if ($arr[$k] + $arr[$k + 1] > $max) {
            $ind_max = $k + 1;
        }
    }

    $diff = abs(array_sum(array_slice($arr, 0, $ind_max)) - array_sum(array_slice($arr, $ind_max)));

    echo $diff . "\n";
}
*/