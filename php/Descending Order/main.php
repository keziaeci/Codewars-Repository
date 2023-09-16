<?php 

    function descendingOrder(int $n) {
        $a = str_split($n);
        rsort($a);
        return implode("", $a);
    }

    print_r(descendingOrder(123234));
?>