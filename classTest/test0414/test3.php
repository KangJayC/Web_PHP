<?php
    $handle=fopen("https://www.ybu.edu.cn/xxgk/ydjj.htm", "rb"); 	//��һ��Զ���ļ�
    $content="";                                        	//���ַ���$content��ʼ��Ϊ��
    while(!feof($handle))                                    	//�ж��Ƿ��ļ�ĩβ
    {
        $data=fread($handle,8192);                      //��ȡ�ļ�����
        $content.=$data;                                    	//����ȡ�������ݸ����ַ���
    }
    echo $content;                                        	//�������
    fclose($handle);                                        	//�ر��ļ�
?>
