<?php 

    // Given an array of integers, return a new array with each value doubled.

    function maps(array $x) {
        return array_map(function ($a){
            return $a * 2;
        }, $x);
    }

    print_r(maps([1,2,3]));

?>