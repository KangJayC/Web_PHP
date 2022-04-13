<?php
    echo strcmp("aBcd","abde");                	//输出-1，比较了"B"和"b"，"B"<"b"
    echo strcasecmp("abcd","aBde");            	//输出-1，比较了"c"和"d"，"c"<"d"
    echo strncmp("abcd","aBcd",3);            	//输出1，比较了"abc"和"aBc"
    echo strncasecmp("abcdd","aBcde",3);        	//输出0，比较了"abc"和"aBc"
?>
