<?php
    $dir="../test0414/test/html";
    $dir_handle=opendir($dir);            	//��Ŀ¼���
    if($dir_handle)
    {
        //ͨ��readdir()��������ֵ�Ƿ�ΪFALSE�ж��Ƿ����һ���ļ�
        while(FALSE!==($file=readdir($dir_handle)))
        {
            echo $file."<br/>";        		//����ļ���
        }
        closedir($dir_handle);            	//�ر�Ŀ¼���
    }
    else
        echo "��Ŀ¼ʧ�ܣ�";
?>