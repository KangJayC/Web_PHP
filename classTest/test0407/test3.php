<?php
    echo strcmp("aBcd","abde");                	//���-1���Ƚ���"B"��"b"��"B"<"b"
    echo strcasecmp("abcd","aBde");            	//���-1���Ƚ���"c"��"d"��"c"<"d"
    echo strncmp("abcd","aBcd",3);            	//���1���Ƚ���"abc"��"aBc"
    echo strncasecmp("abcdd","aBcde",3);        	//���0���Ƚ���"abc"��"aBc"
?>
