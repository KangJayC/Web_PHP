<?php
    $color=array("a"=>"red","blue","white");
    foreach($color as $value)
    {
        echo $value."<br/>";                		//��������ֵ
    }
    foreach($color as $key=>$value)
    {
        echo $key. "=>". $value. "<br/>";       	//�������ļ�����ֵ
    }
?>