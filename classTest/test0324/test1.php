<?php
    $name="Tom";
    $$name=20;
    echo $$name;                    			//输出20
    echo "${$name}";                			//输出20
    echo $Tom;                        			//输出20
    echo ${"Tom"};                    			//输出20
    $name=123;                    			//改变$name的值
?>