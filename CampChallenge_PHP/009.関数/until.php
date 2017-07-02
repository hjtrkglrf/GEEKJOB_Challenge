<?php
function myprofile(){
echo "鈴木翼<br>";
echo "1995年5月3日<br>";
echo "趣味はゲームです<br>";
}
for($i=0;$i<10;$i++){
  myprofile();
}

$a = 5;
function value($a){
if($a%2==0){
echo "偶数<br>";
}elseif($a%2==1){
echo "奇数<br>";
}
}
value($a);
