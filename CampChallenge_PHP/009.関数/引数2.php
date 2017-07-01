<?php
function tri($a=1,$b=5,$c=false){
if($c==false){
$total = $a*$b;
echo $a*$b;
}elseif($c==true){
$result = $total*$total;
echo $result;
}
}
tri($a=1,$b=5,$c=false);
