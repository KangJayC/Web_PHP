<?php

$string="http://www.php.net/index.php";
preg_match('/^(http:\/\/)?([^\/]+)/i',$string,$matches1);
echo $matches1[0];
echo "<br/>";
echo $matches1[2];
echo "<br/>";
echo $matches1[1];

?>