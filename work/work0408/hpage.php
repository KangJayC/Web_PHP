<!DOCTYPE html>
<html>
<head>
    <title>注册页面</title>
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
    <div>新用户注册</div>
    <table border="1">
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="ID"></td>
            <td class="STYLE1">* 不超过10个字符（数字，字母和下面线）</td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="PWD" size="21"></td>
            <td class="STYLE1">* 4～14 个数字</td>
        </tr>
        <tr>
            <td>手机号码：</td>
            <td><input type="tel" name="PHONE"></td>
            <td class="STYLE1">* 11 位数字，第一位为 1</td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td><input type="email" name="EMAIL"></td>
            <td class="STYLE1">* 有效的邮件地址</td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="GO" value="注册">&nbsp;&nbsp;&nbsp;
                <input type="reset" name="NO" value="取消">
            </td>
        </tr>
    </table>
</form>
</body>
</html>