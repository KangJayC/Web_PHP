<?php
    echo strstr("hello world","llo");            	//输出"llo world"
    echo strstr("hello world","llo",true);        	//输出"he"
    $str="I love PHP";
    $needle="PHP";
    if(strstr($str,$needle))
        echo "有PHP";                    	//输出"有PHP"
    else
        echo "没有PHP";               	 	//不输出
?>