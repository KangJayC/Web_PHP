<?php
    $stu=array(
            array("ѧ��", "����", "רҵ��", "�Ա�"),
            array("1", "����", "�����", "��"),
            array("2", "��ϼ", "ͨ�Ź���", "Ů")
            );
    $handle=fopen("../test0414/test/html/stu.csv", "w");
    foreach($stu as $line)
    {
        fputcsv($handle,$line);
    }
    fclose($handle);
?>