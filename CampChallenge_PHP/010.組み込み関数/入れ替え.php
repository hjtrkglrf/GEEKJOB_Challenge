<?php
$search = array("I","U");
$replace = array("い","う");
$str = "「きょUはぴIえちぴIのくみかえかんすUのがくしゅUをしてIます。」<br>";
echo str_replace($search,$replace,$str);
