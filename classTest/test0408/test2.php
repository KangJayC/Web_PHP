<?php
    $str="hi, i am a phper";
    $keywords=preg_split("/[\s,]+/", $str);        		//�Կհ׷��򶺺���Ϊ�����
    print_r($keywords);
    //���Array ( [0] => hi [1] => i [2] => am [3] => a [4] => phper )
?>