<?php
$i = 1000;
$num = 2;
while($i >= '100'){
  $i = $i / $num;
  if($i<100){
    break;
  }
  echo $i;
  echo "<br>";
}
