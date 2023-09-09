<?php 

/**Your task is to create a function that does four basic mathematical operations.

The function should take three arguments - operation(string/char), value1(number), value2(number).
The function should return result of numbers after applying the chosen operation. */

function basicOp($op , $val1 , $val2)  {
    switch ($op) {
        case '+':
            return $val1 + $val2;
            break;
        case '-':
            return $val1 - $val2;
            break;
        case '*':
            return $val1 * $val2;
            break;
        case '/':
            return $val1 / $val2;
            break;
    }

    // cara ke 2
    // return eval("return {$val1}{$op}{$val2};");
}

print(basicOp('*' , 2,3));

?>