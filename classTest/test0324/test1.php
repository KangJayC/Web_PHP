<?php
    $name="Tom";
    $$name=20;
    echo $$name;                    			//���20
    echo "${$name}";                			//���20
    echo $Tom;                        			//���20
    echo ${"Tom"};                    			//���20
    $name=123;                    			//�ı�$name��ֵ
?>