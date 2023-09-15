<?php 
    // Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
    function reverseWords($str) {
        return strrev(implode(" ", array_reverse(explode(" " , $str))));
    }

    print_r(reverseWords('aku cantik'));
?>