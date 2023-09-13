<?php 

    function reverseSeq($n) {
        // $a = [];
        // for ($i=1; $i <= $n ; $i++) {
        //     array_unshift($a , $i);
        // }
        // return $a;

        return range($n , 1);
    }

    print_r(reverseSeq(10));
?>