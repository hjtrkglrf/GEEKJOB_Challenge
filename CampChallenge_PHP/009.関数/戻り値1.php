<?php
function myprofile(){
echo "鈴木翼<br>";
echo "1995年5月3日<br>";
echo "趣味はゲームです<br>";
$juge = "true";
return $juge;
}
$juge = myprofile();
if($juge=="true"){
  echo "この処理は正しく実行できました<br>";
}else{
  echo "正しく実行できませんでした<br>";
}
