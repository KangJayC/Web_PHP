<?php
    $handle=fopen("D:/SoftwareTest/WampServer2/wamp/www/classTest/test0414/test/html/index.txt", "w+");  //��index.txt�ļ��������������ȴ���
    $num=fwrite($handle,"����2022���»�",14);
    if($num)
    {
        echo "д���ļ��ɹ�<br/>";
        echo "д����ֽ���Ϊ".$num."��";            //�ɹ�д����ַ�����Ϊ14��
        fclose($handle);                            	//�ر��ļ�
    }
    else
        echo "�ļ�д��ʧ��";
?>