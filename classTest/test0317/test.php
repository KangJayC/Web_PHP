<!DOCTYPE html>
<html>
<head>
    <title>���Ӧ��</title>
    <style type="texts">
    p{
        text-align:center;
        font-family:"����";
        font-size:24px;
    }
    </style>
</head>
<body>
    <p>HTML5ҳ��</p>
    <?php
        $str1="PHP����1";            	//�ڵ���������ʾ
        $str2="PHP����2";            	//���ı�������ʾ
        echo "<script>";
        echo "alert('".$str1."');";        	//��JavaScript��ʹ��$str1����
        echo "</script>";
    ?>
    <input type="text" name="tx" size=20><br/>
    <input type="button" name="bt" value="����" onclick="tx.value='<?php echo $str2;?>'">
</body>
<ml>
