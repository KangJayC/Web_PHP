<!DOCTYPE html>
<html>
<head>
    <title>ע��ҳ��</title>
    <style type="text/css">
    <!--
        .STYLE1{font-size: 14px;color:red;}
    -->
    div{
        text-align:center;
        font-size:24px;
        color:#0000FF;
    }
    table{
        margin:0 auto;
    }
    </style>
</head>
<body>
<form name="frl" method="post" action="ppage.php">
    <div>���û�ע��</div>
    <table border="1">
        <tr>
            <td>�û�����</td>
            <td><input type="text" name="ID"></td>
            <td class="STYLE1">* ������10���ַ������֣���ĸ�������ߣ�</td>
        </tr>
        <tr>
            <td>���룺</td>
            <td><input type="password" name="PWD" size="21"></td>
            <td class="STYLE1">* 4��14 ������</td>
        </tr>
        <tr>
            <td>�ֻ����룺</td>
            <td><input type="tel" name="PHONE"></td>
            <td class="STYLE1">* 11 λ���֣���һλΪ 1</td>
        </tr>
        <tr>
            <td>���䣺</td>
            <td><input type="email" name="EMAIL"></td>
            <td class="STYLE1">* ��Ч���ʼ���ַ</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="GO" value="ע��">&nbsp;&nbsp;&nbsp;
                <input type="reset" name="NO" value="ȡ��">
            </td>
        </tr>
    </table>
</form>
</body>
</html>