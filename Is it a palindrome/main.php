<?php 

    function isPalindrome($str)  {
        // return strrev(strtolower($str));
        // return (strrev(strtolower($str)) === $str) ? 'true' : 'false';
        // return strrev(strtolower($str)) == strtolower($str);
        return (strcasecmp(strrev($str),$str)) ? 'false' : 'true';
    }

    print(isPalindrome('Abba'));
?>