<?php
list($id,$name,$birth,$add)= myprofile();
function myprofile(){
$id = 12345;
$name = "鈴木翼";
$birth = "1995/5/3";
$add = "東京";
return array($id,$name,$birth,$add);
}
  $profile = myprofile();
$data = array($id,$name,$birth,$add);
echo $data[1];
echo $data[2];
echo $data[3];
