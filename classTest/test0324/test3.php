<?php
	for($i=1;$i<=9;$i++)					//第一层for循环
	{
		for($j=1;$j<=$i;$j++)				//第二层for循环
		{
			echo "$i*$j=".$i*$j."&nbsp;";	//输出乘法口诀
			if($j==$i)						//如果行数等于列数就回车
				echo "<br/>";
		}
	}
?>
