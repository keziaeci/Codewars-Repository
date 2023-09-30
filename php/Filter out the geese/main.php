<?php 

function gooseFilter($birds) {
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    return array_values(array_diff($birds, $geese));
}

print_r(gooseFilter(['African', 'cina','batak']))

?>