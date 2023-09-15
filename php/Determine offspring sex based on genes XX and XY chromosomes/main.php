<?php 

    function chromosomeCheck(string $sperm) : string {
        return ($sperm == 'XY') ? 'Congratulations! You\'re going to have a son.' : 'Congratulations! You\'re going to have a daughter.';
    }

    print(chromosomeCheck('xy'))
?>