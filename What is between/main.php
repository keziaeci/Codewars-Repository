<?php 

function between(int $a , int $b) : array {
    return range($a,$b);
}

print_r(between(-1,4));
?>