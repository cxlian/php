<?php
 $conn = mysql_connect("localhost","root","123456") or die("数据库链接错误".mysql_error());
 mysql_select_db("wish_list",$conn) or die("数据库访问错误".mysql_error());
 mysql_query("set names gb2312");
?>