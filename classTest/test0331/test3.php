<?php
    $array1=array_fill(2,3,"red");           	//�ӵ�2����Ԫ��ʼ���3��ֵ"red"
    $keys=array("a", 3, "b");
    $array2=array_fill_keys($keys, "����ֵ");	//ʹ��$keys�����е�ֵ��Ϊ����
    print_r($array1);                   	 	//��������Array ( [2] => red [3] => red [4] => red )
    print_r($array2);               		//��������Array ( [a] =>����ֵ[3] =>����ֵ[b]=>����ֵ)
?>