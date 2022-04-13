<?php
    $color=array("a"=>"red","blue","white");
    foreach($color as $value)
    {
        echo $value."<br/>";                		//输出数组的值
    }
    foreach($color as $key=>$value)
    {
        echo $key. "=>". $value. "<br/>";       	//输出数组的键名和值
    }
?>