<?php
/*** 用于验证登录动作 ***/
$user =$_POST["user"];
$pwd =$_POST["pwd"];
//包含数据库连接文件
include('conn.php');
$check_query = mysql_query("select id from user where user='$user' and pwd='$pwd' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['id'] = $result['id'];
    echo 1;
    exit;
} else {
    echo 0;
}
?>