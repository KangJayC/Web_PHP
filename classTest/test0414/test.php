<?php
    $dir="../test0414/test/html";
    $dir_handle=opendir($dir);            	//打开目录句柄
    if($dir_handle)
    {
        //通过readdir()函数返回值是否为FALSE判断是否到最后一个文件
        while(FALSE!==($file=readdir($dir_handle)))
        {
            echo $file."<br/>";        		//输出文件名
        }
        closedir($dir_handle);            	//关闭目录句柄
    }
    else
        echo "打开目录失败！";
?>