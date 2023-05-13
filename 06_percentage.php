<?php
function percentage($a,$b,$c,$total=200){
    echo "A=".$a."<br>";
    echo "B=".$b."<br>";
    echo "C=".$c."<br>";
    echo "Total=".$total."<br>";
    $percentage=($a+$b+$c)*100/$total;
    echo "Percentage=".$percentage;
}
percentage(50,50,50);
percentage(50,40,80,250);
?>