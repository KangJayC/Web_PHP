<!DOCTYPE html>
<!--HTML5 表单-->
<style type="text/css">
p{
    font-family:"方正舒体";
    font-size:18px;
}
div{
    font-family:"黑体";
    font-size:18px;
</style>
<form name="fl" method="post" action="">
    <p>
       您的E-mail地址： <br/>
       <input type="email" name="Email" size=31><br/>
       您的留言：<br/>
       <textarea name="note" rows=10 cols=30></textarea>
       <br/><input type="submit"name="bt1" value="提交">
       <input type="reset" name="bt2" value="清空">
    </p>
</form>
<!--以上是留言簿表单-->

<?php
    if(isset($_POST['bt1']))
    {
        $Email=$_POST['Email'];
        $note=$_POST['note'];
        if(!$Email||!$note)
            echo "<script>alert('E-mail 地址和留言请填写完整！')</script>";
        else
        {
            $array=explode("@", $Email);
            if(count($array)!=2)
                echo "<script>alert('E-mail 地址格式错误！' )</script>";
            else
            {
                $username=$array[0];
                $netname=$array[1];
                if(strstr($username,".") or strstr($username,","))
                    echo "<script>alert('E-mail 地址格式错误！')</script>";
                else
                {
                    $str1=htmlspecialchars("<");
                    $str2=htmlspecialchars(">");
                    $newnote=str_replace("我","本人",$note);
                    echo "<div>";
                    echo "用户".$str1.$username.$str2."您好!&nbsp;";
                    echo "您是". $netname."网友!<br/>";
                    echo "<br/>您的留言是：<br/>&nbsp;&nbsp;&nbsp;".$newnote."<br/>";
                    echo "</div>";
                }

            }
        }
    }
?>