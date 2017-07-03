<?php
function search($name){
$user1 = array("id"=>"123","name"=>"ao","birth"=>"1995/1/1","add"=>"仙台");
$user2 = array("id"=>"456","name"=>"kiiro","birth"=>"1995/2/2","add"=>"東京");
$user3 = array("id"=>"789","name"=>"siro","birth"=>"1995/3/3","add"=>"大阪");
//extract ($user1);
//extract ($user2);
//extract ($user3);
//global $key;
if(strstr($user1["name"],$name)){
//  return array($id,$name,$birth,$add);
  return $user1;
}elseif(strstr($user2["name"],$name)){
//  return array($id2,$name2,$birth2,$add2);
  return $user2;
}elseif(strstr($user3["name"],$name)){
//  return array($id3,$name3,$birth3,$add3);
  return $user3;
}
}
$key = "a";
$search = search($key);
foreach($search as $k => $v){
  if ($k == "id") { continue; }
  echo "$k=$v<br>";
}
//  $profile = ();
//$data = array($id,$name,$birth,$add);
//echo $data[1];
//echo $data[2];
//echo $data[3];
