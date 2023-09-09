<?php 

// Given a non-empty array of integers, return the result of multiplying the values together in order. Example:

function grow($a) : int {
    return array_product($a);
}

print(grow([1,2,3,4]));
?>