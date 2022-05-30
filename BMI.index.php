<?php
function bodymass($weight,$height){
    echo "please input your main medical weight which is".$weight;
    echo "<br>";
    echo "please input your main medical height which is" .$height;
    echo "<br>";
    echo "your body mass index in medical calculator is" .($weight/($height*$height));
    echo "<br>";
}
bodymass(105,1.66);
bodymass(65,1.84);
echo "<br>";
$weight=65;
$height=1.84;
$index=($weight)/($height*$height);
switch ($index){
    case $index<=18.4:{
        echo "your health status for this month is underweight ";
        break;
    }
    case $index>=18.5 && $index<24.9:{
        echo "your health status  for this month is normal weight";
        break;
    }
    case $index>=25.0 && $index<=29.9:{
        echo "your health status  for this month is obesity class 1";
        break;
    }
    case $index>=30.0 && $index<34.9:{
        echo "your health status  for this month is obesity class 2";
        break;
    }
    default:
        echo "your health status  for this month is obesity class 3";


}




?>
