<?php
$total = '';
for($i=1;$i<=9;$i++){
  if($i==5){
    continue;
  }
  for($j=1;$j<=9;$j++){
  $total = $i*$j;
//  $kuku = array( "$i*$j" => $total );
  $kuku["$i*$j"] = $total;
  }
  }
  foreach($kuku as $siki => $kekka){
    echo "$siki".'は'."$kekka".'です。<br>';
  }
