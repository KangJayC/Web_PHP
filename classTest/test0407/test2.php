<?php
    echo strstr("hello world","llo");            	//���"llo world"
    echo strstr("hello world","llo",true);        	//���"he"
    $str="I love PHP";
    $needle="PHP";
    if(strstr($str,$needle))
        echo "��PHP";                    	//���"��PHP"
    else
        echo "û��PHP";               	 	//�����
?>