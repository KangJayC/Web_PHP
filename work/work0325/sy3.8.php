<!DOCTYPE html>
<!--HTML5表单，包含五个复选框和一个【提交】按钮-->
<form action=""method="post">
    以下属于Web开发语言的有哪几种？<br/>
    <input type="checkbox"name="answer[]"value="C语言">C语言<br/>
    <input type="checkbox"name="answer[]"value="PHP">PHP<br/>
    <input type="checkbox"name="answer[]"value="FLASH">FLASH<br/>
    <input type="checkbox"name="answer[]"value="ASP">ASP<br/>
    <input type="checkbox"name="answer[]"value="JSP">JSP<br/>
    <input type="submit"name=bt_answer value="提交">
</form>
<?php
    if(isset($_POST['bt_answer']))
    {
        $answer=@$_POST['answer'];
        if(!$answer)
        echo"<script>alert('请选择答案')</script>";
        $num=count($answer);
        $anw="";
        for($i=0;$i<$num;$i++)
        {
            $anw=$anw.$answer[$i];
        }
        if($anw=="PHPASPJSP") 
             echo"<script>alert('回答正确！')</script>";
        else
             echo"<script>alert(('回答错误！')</script>";
    }
?>