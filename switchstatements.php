<?php
$totals=250000;
$sales101=200000;
$salary1=$sales101*0.15;
$sales102=100000;
$salary2=$sales102*0.10;
$sales103=50000;
$salary3=$sales103*0.05;
$sales104=20000;
$salary4=$sales104*0.02;
switch ($totals){
    case $totals>=$sales101:{
        echo "your salary for this month is $salary1";
        break;
    }
    case $totals>=$sales102 && $totals<$sales101:{
        echo "your salary for this month is $salary2";
        break;
    }
    case $totals>=$sales103 && $totals<$sales102:{
        echo "your salary for this month is $salary3";
        break;
    }
    case $totals>=$sales104 && $totals<$sales103:{
        echo "your salary for this month is $salary4";
        break;
    }
    default:
        echo "your salary for this month is zero" ;


}










?>
