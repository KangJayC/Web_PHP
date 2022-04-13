<?php
    include 'hpage.php';
    $id=$_POST['ID'];
    $pwd=$_POST['PWD'];
    $phone=$_POST['PHONE'];
    $Email=$_POST['EMAIL'];
    #$checkid=preg_match('/^\w{1,10}$/',$id);
    #$checkpwd=preg_match('/^\d{4,14}$/',$pwd);
    #$checkphone=preg_match('/^1\d{10}$/',$phone);
    #$checkEmail=preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$Email);

    $checkid=preg_match('/^\w{1,10}$/',$id);
    $checkpwd=preg_match('/^\d{4,14}$/',$pwd);
    $checkphone=preg_match('/^1\d{10}$/',$phone);
    $checkEmail=preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$Email);
    if($checkid&&$checkpwd&&$checkphone&&$checkEmail)
        echo"注册成功！";
    else
        echo"注册失败，格式不对";
?>