<?php

/*

Mike often needs to know if he could place a rectangular card of size A x B into an envelope of size C x D . In order to be faster, Mike doesn’t really try to put a card into an envelope, he just places a card on the table and then tries to cover it with an envelope. Of course, both the card and the envelope can be rotated, but they cannot be folded.

Now, Mike wants to be even faster. He decided to find the answers for all sizes of cards and envelopes he operates with. That’s where you jump in. Your program should compute the answer for one particular case. The program should work the same way Mike does his tests, so in boundary cases the answer is “yes”.
Input

The first line contains four integers A, B, C and D and delimited by a space. All values are less than 2x109.
*/

$input = [1, 2, 3, 6];

#$input = explode(fgets(STDIN), " ");

list($a, $b, $c, $d) = $input;

$ans = ( ($a * $b) >= ($b * $d)) ? "yes" : "no";

echo $ans;


?>