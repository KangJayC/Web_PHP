<?php
    $str="hi, i am a phper";
    $keywords=preg_split("/[\s,]+/", $str);        		//以空白符或逗号作为定界符
    print_r($keywords);
    //输出Array ( [0] => hi [1] => i [2] => am [3] => a [4] => phper )
?>