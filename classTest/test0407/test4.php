<?php
    $str="What Is Your Name";
    $array=array("a","o","A","O","e");
    echo str_replace($array, "",$str);            	//���һ���滻�����"Wht Is Yur Nm"
    $array1=array("a","b","c");
    $array2=array("d","e","f");
    echo str_replace($array1,$array2, "abcdef"); 	//��Զ���滻�����"defdef"
?>