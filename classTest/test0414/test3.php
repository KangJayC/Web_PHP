<?php
    $handle=fopen("https://www.ybu.edu.cn/xxgk/ydjj.htm", "rb"); 	//打开一个远程文件
    $content="";                                        	//将字符串$content初始化为空
    while(!feof($handle))                                    	//判断是否到文件末尾
    {
        $data=fread($handle,8192);                      //读取文件内容
        $content.=$data;                                    	//将读取到的数据赋给字符串
    }
    echo $content;                                        	//输出内容
    fclose($handle);                                        	//关闭文件
?>
