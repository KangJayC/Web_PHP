<?php
    $row=1;
    $handle=fopen("../test0414/test/html/stu.csv","r");        //��һ��CSV�ļ�
    while($data=fgetcsv($handle, 1000, ","))            //��ȡ��ǰ�����ݣ�������һ������
    {
        $num=count($data);                        	//��������Ԫ�ظ���
        echo "<p>��".$row. "��: <br/>";
        $row++;
        for ($c=0; $c < $num; $c++)
        {
            echo $data[$c] . "<br/>";                	//�����������
        }
    }
    fclose($handle);
?>