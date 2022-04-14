<?php
    $line=file("../test0414/test/html/1.txt");                    	//将文件1.txt中内容读取到数组$line中
    foreach($line as $file)                            	//浏览$line数组
    {
        echo $file. "<br/>";                        	//输出内容"这是文件1"
    }
?>