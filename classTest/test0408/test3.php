<?php
    $array=array("name","number","project","input");
    $newarray1=preg_grep("/^n/",$array);       	//匹配以字母"n"开头的单词
    print_r($newarray1);                    	//输出Array ( [0] => name [1] => number )
    $newarray2=preg_grep("/e+/",$array);       	//匹配含有字母"e"的单词
    print_r($newarray2);                    	//输出Array ( [0] => name [1] => number [2] => project )
?>