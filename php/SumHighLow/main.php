<?php 

/*Sum all the numbers of a given array ( cq. list ), except the highest and the lowest element ( by value, not by index! ).

The highest or lowest element respectively is a single element at each edge, even if there are more than one with the same value.

Mind the input validation. */

function sumArray($arr) : int {
    // sort($arr);
    // array_shift($arr);
    // array_pop($arr);
    // return array_sum($arr);
    return array_sum($arr) - max($arr) - min($arr);

}

print_r(sumArray([3,5,1,1,7]));

?>