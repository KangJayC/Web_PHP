<?php
    $str="What Is Your Name";
    $array=array("a","o","A","O","e");
    echo str_replace($array, "",$str);            	//多对一的替换，输出"Wht Is Yur Nm"
    $array1=array("a","b","c");
    $array2=array("d","e","f");
    echo str_replace($array1,$array2, "abcdef"); 	//多对多的替换，输出"defdef"
?>