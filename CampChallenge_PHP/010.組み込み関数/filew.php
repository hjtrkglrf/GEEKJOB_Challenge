<?php
$fp = fopen('sample.txt','w');
if($fp != false){
fwrite($fp,'I am gohan!');
fclose($fp);
}
