<?php 

    function square_digits($num) {
        $a = array_map(function ($x) {
            return pow($x,2);
        },str_split($num));

        return implode('', $a);
    }

    print_r(square_digits(12345))

?>