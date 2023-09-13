<?php 

function strCount($str , $letter) : int {
    // return preg_match_all("/$letter/i" , $str);
    return substr_count($str,$letter);
}

print(strCount('ecik' , 'e'));

?>