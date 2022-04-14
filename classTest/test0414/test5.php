<?php
    $row=1;
    $handle=fopen("../test0414/test/html/stu.csv","r");        //打开一个CSV文件
    while($data=fgetcsv($handle, 1000, ","))            //获取当前行内容，并返回一个数组
    {
        $num=count($data);                        	//计算数组元素个数
        echo "<p>第".$row. "行: <br/>";
        $row++;
        for ($c=0; $c < $num; $c++)
        {
            echo $data[$c] . "<br/>";                	//输出数组内容
        }
    }
    fclose($handle);
?>