<!DOCTYPE html>
<html>
<head>
    <title>����������</title>
</head>
<body>
<form method=post>
    <table>
        <tr>
            <td>
                <input type="text"size="4"name="number1">
                <select name="caculate">
                    <option value="+">+
                    <option value="-">-
                    <option value="*">*
                    <option value="/">/
                </select>
                <input type="text"size="4"name="number2">
                <input type="submit"name="ok"value="����">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
    function cac($a,$b,$caculate)
    {
        if($caculate=="+")
            return $a+$b;
        if($caculate=="-")
            return $a-$b;
        if($caculate=="*")
            return $a*$b;
        if ($caculate=="/")
        {
            if($b=="0")
                echo"�������ܵ���0";
            else
                return $a/$b;
        }
    }

if(isset($_POST['ok']))
{
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $caculate=$_POST['caculate'];
    if(is_numeric($number1)&&is_numeric($number2))
    {
        $answer=cac($number1,$number2,$caculate);
        echo "<script>alert('".$number1.$caculate.$number2."=".$answer."')</script>";
    }
    else
        echo"<script>alert(('����Ĳ������֣�')</script>";
}


