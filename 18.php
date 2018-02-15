<?php //php 7.0.8
function printFibonacci($num){
 
    if($num==0 || $num==1) 
       return $num;
      else {
        return (printFibonacci($num-1) + printFibonacci($num-2));
    } 
}
for($i=0;$i<=10;$i++)
    echo printFibonacci($i)." ";
?>
