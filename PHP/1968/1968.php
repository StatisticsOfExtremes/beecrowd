/* All the citizens have been numbered from A to B (it is obvious that this idea has come from the adults — they love these things!). In order to define who would be the leaders of the groups during the evacuation, someone has suggested that the leaders should be all those who have received a prime number (it is obvious that this idea has come from a child — children have a lot of imagination and they love pleasing themselves with things that need no further explanation!). But soon another idea came forth:

— A prime number is a number that has exactly 2 divisors. What if the leaders were those who have received a number with exactly N divisors?

All the children loved the idea. The adults, on the other hand, needed a long time to debate how the number N should be chosen. When finally the number N was chosen, each citizen who were not leader of a group should pick up the group he or she liked the most to enter it. No other restriction was imposed to the groups. Nothing was preventing, for example, a group of consisting only of its leader. Note that, depending on the value of N, there would not be any group at all.

Knowing the values of A, B and N, release the child inside you and try to figure out the total number of possibilities for the formation of the groups. If, for example, A = 5, B = 8 and N = 4, situation in which the leaders are the citizens 6 and 8, there are 4 possibilities:

    both citizens 5 and 7 choose enter the group led by citizen 6;
    both citizens 5 and 7 choose enter the group led by citizen 8;
    citizen 5 chooses enter the group led by citizen 6 and citizen 7 chooses enter the group led by citizen 8;
    citizen 5 chooses enter the group led by citizen 8 and citizen 7 chooses enter the group led by citizen 6.

Input

The single input line consists only of the positive integers A, B and N (A ≤ B; B, N ≤ 107).
Output

Output a line containing a single value which represents the number of possibilities for the formation of the groups. As this number can be very large, print only the remainder it leaves when divided by 109 + 7.

*/

#$input = explode(trim(fgets(STDIN)), " ");

$a = 5;
$b = 8;
$N = 4;

# every number is divisible by 1 and itself, so we want
# to know if its divisible by a number between [2, k - 1]
# that is greater than the `number_of_divisors`

function divisors($a) {
    $n_divisors = 0;

    foreach(range(2, $a - 1) as $dividend) {
        if ($a % $dividend == 0) {
            $n_divisors++;
        };
    };

    return $n_divisors;
};

$leaders = 0;

foreach(range(a, b) as $num => $key) {
    if (divisors($num) == $N) {
        $leaders++;
    };
};
$thing = pow(10, 9) + 7;
$ans = pow($leaders, ($b - $a + 1) - $leaders);

echo ($ans % $thing);$N = 3;
$a = 5;
$b = 8;

# every number is divisible by 1 and itself, so we want
# to know if its divisible by a number between [2, k - 1]
# that is greater than the `number_of_divisors`

function divisors($a) {
    $n_divisors = 0;

    foreach(range(2, $a - 1) as $dividend) {
        if ($a % $dividend == 0) {
            $n_divisors++;
        };
    };

    return $n_divisors;
}

$leaders = 0;

$thing

foreach(range(a, b) as $num => $key) {
    if (divisors($num) == $N) {
        $leaders++;
    };
        
};


$ans = pow($leaders, ($b - $a + 1) - $leaders);


