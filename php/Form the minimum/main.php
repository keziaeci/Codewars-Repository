<?php 

    function minValue($arr) {
        sort($arr);
        return intval(join("",array_unique($arr)));
    }

    print_r(minValue([1,2,3,2,3]))

?>