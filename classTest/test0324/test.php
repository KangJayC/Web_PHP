<?php
    $my_global=1;                              	//定义变量$my_global
    function my_func1()                         	//函数my_func1()
    {
        global $my_global;                      	//声明$my_global为全局变量
        global $two_global;                     	//声明$two_global为全局变量
        echo '$my_global=' .$my_global . "<br/>";    	//调用该函数时输出结果值为1
        $two_global=2;                        	//将全局变量$two_global赋值为2
    }
    function my_func2()                         	//函数my_func2()
    {
        global $two_global;                     	//声明$two_global为全局变量
        echo '$two_global = ' . $two_global . "<br/>"; 	//调用该函数时输出结果值为2
        $two_global=3;
    }
    my_func1();                                	//调用my_func1()函数，输出1
    my_func2();                                	//调用my_func2()函数，输出2
    echo $two_global;                            	//输出结果值为3
?>