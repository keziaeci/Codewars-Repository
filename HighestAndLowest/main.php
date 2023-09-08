<?php 

function highLow($str)  {
    $a = min(explode(" " ,$str));
    $b = max(explode(" " ,$str));
    return "$b, $a";
}


print(highLow('1 2 4 5 6 -2 -15 3 6'));
?>