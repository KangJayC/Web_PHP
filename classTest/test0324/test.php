<?php
    $my_global=1;                              	//�������$my_global
    function my_func1()                         	//����my_func1()
    {
        global $my_global;                      	//����$my_globalΪȫ�ֱ���
        global $two_global;                     	//����$two_globalΪȫ�ֱ���
        echo '$my_global=' .$my_global . "<br/>";    	//���øú���ʱ������ֵΪ1
        $two_global=2;                        	//��ȫ�ֱ���$two_global��ֵΪ2
    }
    function my_func2()                         	//����my_func2()
    {
        global $two_global;                     	//����$two_globalΪȫ�ֱ���
        echo '$two_global = ' . $two_global . "<br/>"; 	//���øú���ʱ������ֵΪ2
        $two_global=3;
    }
    my_func1();                                	//����my_func1()���������1
    my_func2();                                	//����my_func2()���������2
    echo $two_global;                            	//������ֵΪ3
?>