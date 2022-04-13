<?php
    $array1=range(1,5);
    $array2=range(2,10,2);
    $array3=range("a","e");
    print_r($array1);                   //Êä³ö£ºArray ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
    print_r($array2);                 //Êä³ö£ºArray ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
    print_r($array3);                  //Êä³ö£ºArray ( [0] => a [1] => b [2] => c [3] => d [4] => e )
?>