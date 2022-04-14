<?php
    $handle=fopen("D:/SoftwareTest/WampServer2/wamp/www/classTest/test0414/test/html/index.txt", "w+");  //打开index.txt文件，若不存在则先创建
    $num=fwrite($handle,"北京2022冬奥会",14);
    if($num)
    {
        echo "写入文件成功<br/>";
        echo "写入的字节数为".$num."个";            //成功写入的字符个数为14个
        fclose($handle);                            	//关闭文件
    }
    else
        echo "文件写入失败";
?>