<?php
    $arr=range(1,10);
    foreach($arr as $value)
        echo $value." ";
    echo "<br/>";
    shuffle($arr);
    foreach($arr as $value)
        echo $value."<br/>";
?>
