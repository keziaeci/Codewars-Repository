<?php 

    function descendingOrder(int $n) {
        $a = str_split($n);
        // return $a;
        rsort($a);
        return implode("", $a);
    }

    print_r(descendingOrder(123234));
?>





<!-- 

void setup()
{
  pinMode(13, OUTPUT);
  pinMode(12, OUTPUT);
  pinMode(11, OUTPUT);
  pinMode(10, OUTPUT);
  pinMode(9, OUTPUT);
  pinMode(8, OUTPUT);
  pinMode(7, OUTPUT);


}

void loop()
{

  
 
  
} -->