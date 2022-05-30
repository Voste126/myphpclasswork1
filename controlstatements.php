<?php
$sales101=200000;
$salary1=$sales101*0.15;
$sales102=100000;
$salary2=$sales102*0.10;
$sales103=50000;
$salary3=$sales103*0.05;
$sales104=20000;
$salary4=$sales104*0.02;
$totals=25000;

if ($totals>=$sales101){
    echo "your salary this month will be a total of $salary1";
}
elseif($totals>=$sales102 && $totals<$sales101){
    echo "your salary this month will be a total of $salary2";
}
elseif($totals>=$sales103 && $totals<$sales102){
    echo "your salary this month will be a total of $salary3";

}
elseif ($totals>=$sales104 && $totals<$sales103){
    echo "your salary for this month is $salary4";
}
else{
    echo "your salary is not due";
}




?>
