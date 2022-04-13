<style type="text/css">
table,div,td{
    text-align:center;
}
table{
    margin:0 auto;
}
p{
    font-size:18px;
    color:#FF0000;
}
</style>
<form name=fr1 method=post>
    <table border=1>
    <tr>
        <td><div>学号</div></td>
        <td><div>姓名</div></td>
        <td><div>成绩</div></td>
    </tr>
<?php
    for($i=0;$i<5;$i++)  //循环生成表格的文本框
    {
?>
    <tr>
        <td><input type=text name="XH[]"></td>
        <td><input type=text name="XM[]"></td>
        <td><input type=text name="CJ[]"></td>
    </tr>
<?php }?>
        <tr>
            <td colspan="3">
                <input type="submit" name="bt_stu" value="提交">
            </td>
        </tr>
    </table>
</form>
<p align=center>注意：学号值不能重复</p><br/>
<!--- 以上是输出表单 -->
<?php
    if(isset($_POST['bt_stu']))  //判断按钮是否被按下
    {
        $XH=$_POST['XH'];  //接收所有学号的值存入数组$XH
        $XM=$_POST['XM'];  //接收所有姓名的值存入数组$XM
        $CJ=$_POST['CJ'];  //接收所有成绩的值存入数组$CJ
        array_multisort($CJ,$XH,$XM);  //对以上三个数组排序，$CJ为首要数组
        for($i=0;$i<count($XH);$i++)
            $sum[$i]=array($XH[$i],$XM[$i],$CJ[$i]);  //将三个数组的值组成一个二维数组$sum
		echo "<div>排序后成绩表如下:</div>";
		//表格的首部
        echo "<table border=2><tr><td>学号</td><td>姓名</td><td>成绩</td></tr>";
        foreach($sum as $value)  //使用foreach循环遍历数组$sum
        {
            list($stu_number,$stu_name,$stu_score)=$value;//使用list()函数将数组中的值赋给变量
			//输出表格内容
            echo "<tr><td>$stu_number</td><td>$stu_name</td><td>$stu_score</td></tr>";
        }
        echo "<table><br/>";  //表格尾部
        reset($sum);  //重置$sum数组的指针
        while(list($key,$value)=each($sum))  //使用while循环遍历数组
        {
            list($stu_number,$stu_name,$stu_score)=$value;
            if($stu_number==181101)  //查询是否有学号为181101的值
            {
                echo "<p align=center>";
                echo $stu_number."的姓名为: ".$stu_name.",";
                echo "成绩为：".$stu_score;
                break;  //找到则循环结束
            }
        }
    }
?>