<!DOCTYPE html>
<!--HTML5 ��-->
<style type="text/css">
p{
    font-family:"��������";
    font-size:18px;
}
div{
    font-family:"����";
    font-size:18px;
</style>
<form name="fl" method="post" action="">
    <p>
       ����E-mail��ַ�� <br/>
       <input type="email" name="Email" size=31><br/>
       �������ԣ�<br/>
       <textarea name="note" rows=10 cols=30></textarea>
       <br/><input type="submit"name="bt1" value="�ύ">
       <input type="reset" name="bt2" value="���">
    </p>
</form>
<!--���������Բ���-->

<?php
    if(isset($_POST['bt1']))
    {
        $Email=$_POST['Email'];
        $note=$_POST['note'];
        if(!$Email||!$note)
            echo "<script>alert('E-mail ��ַ����������д������')</script>";
        else
        {
            $array=explode("@", $Email);
            if(count($array)!=2)
                echo "<script>alert('E-mail ��ַ��ʽ����' )</script>";
            else
            {
                $username=$array[0];
                $netname=$array[1];
                if(strstr($username,".") or strstr($username,","))
                    echo "<script>alert('E-mail ��ַ��ʽ����')</script>";
                else
                {
                    $str1=htmlspecialchars("<");
                    $str2=htmlspecialchars(">");
                    $newnote=str_replace("��","����",$note);
                    echo "<div>";
                    echo "�û�".$str1.$username.$str2."����!&nbsp;";
                    echo "����". $netname."����!<br/>";
                    echo "<br/>���������ǣ�<br/>&nbsp;&nbsp;&nbsp;".$newnote."<br/>";
                    echo "</div>";
                }

            }
        }
    }
?>