<?php
    $line=file("../test0414/test/html/1.txt");                    	//���ļ�1.txt�����ݶ�ȡ������$line��
    foreach($line as $file)                            	//���$line����
    {
        echo $file. "<br/>";                        	//�������"�����ļ�1"
    }
?>