<?php 

// Complete the function so that it finds the average of the three scores passed to it and returns the letter value associated with that grade.

function getGrade($a, $b , $c) {
    $score = array_sum([$a,$b,$c]) / count([$a,$b,$c]);
    // return $score;
    // return $score >= 0 && $score <60;

    if ($score >= 90 && $score <= 100 ) {
        return 'A';
    }   elseif ($score >= 80 && $score < 90) {
        return 'B';
    }   elseif ($score >= 70 && $score < 80) {
        return 'C';
    }   elseif ($score >= 60 && $score < 70) {
        return 'D';
    // }   elseif ($score >= 0 && $score < 60) {
    //     return 'F';
    } else {
        return 'F';
    }

    // switch ($score) {
    //     case $score >= 90 && $score <= 100 :
    //         return 'A';
    //         break;
        
    //     case $score >= 80 && $score < 90 :
    //         return 'B';
    //         break;
        
    //     case $score >= 70 && $score < 80 :
    //         return 'C';
    //         break;

    //     case $score >= 60 && $score < 70 :
    //         return 'D';
    //         break;

    //     case $score >= 0 && $score < 60 :
    //         return 'F';
    //         break;

    //         // default:
    //         // return 'F';
    // }
}

print(getGrade(0,0,0));
?>