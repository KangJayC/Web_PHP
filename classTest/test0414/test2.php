<?php
    $stu=array(
            array("学号", "姓名", "专业名", "性别"),
            array("1", "王林", "计算机", "男"),
            array("2", "李霞", "通信工程", "女")
            );
    $handle=fopen("../test0414/test/html/stu.csv", "w");
    foreach($stu as $line)
    {
        fputcsv($handle,$line);
    }
    fclose($handle);
?>