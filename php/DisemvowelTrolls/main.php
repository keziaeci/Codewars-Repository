<?php 

function disemvowel($s) : string {
    return preg_replace('/[aiueo]/i', '' , $s);
}

print_r(disemvowel('halo gais'));
?>