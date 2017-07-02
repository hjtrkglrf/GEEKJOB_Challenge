<?php
$hazime = mktime(0,0,0,1,1,2015);
$owari = mktime(23,59,59,12,31,2015);
echo "差は".($owari - $hazime)."秒です。<br>";
