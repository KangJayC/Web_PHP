<?php
    $array1=array_fill(2,3,"red");           	//从第2个单元开始填充3个值"red"
    $keys=array("a", 3, "b");
    $array2=array_fill_keys($keys, "数组值");	//使用$keys数组中的值作为键名
    print_r($array1);                   	 	//输出结果：Array ( [2] => red [3] => red [4] => red )
    print_r($array2);               		//输出结果：Array ( [a] =>数组值[3] =>数组值[b]=>数组值)
?>