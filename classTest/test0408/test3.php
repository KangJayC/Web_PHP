<?php
    $array=array("name","number","project","input");
    $newarray1=preg_grep("/^n/",$array);       	//ƥ������ĸ"n"��ͷ�ĵ���
    print_r($newarray1);                    	//���Array ( [0] => name [1] => number )
    $newarray2=preg_grep("/e+/",$array);       	//ƥ�京����ĸ"e"�ĵ���
    print_r($newarray2);                    	//���Array ( [0] => name [1] => number [2] => project )
?>