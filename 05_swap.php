<?php
function swap(&$a, &$b){
    $t=$a;
    $a=$b;
    $b=$t;
}
$a=10;
echo "A=".$a;
echo "<br>";
$b=20;
echo "B=".$b;
echo "<br>";

swap($a,$b);
echo "Ater Swapping="."A=".$a." B=".$b;
?>