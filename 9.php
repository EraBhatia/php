<?php //php 7.0.8
function sum_odd($x){
    $sum=0;
    for($i=1;$i<=$x;$i++)
    {
        if(($i%2)!=0)
            $sum+=$i;
    }
    echo "Sum of ".$x." Natural Numbers is ".$sum."\n";
}
sum_odd(4);
sum_odd(9);
?>
