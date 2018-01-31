<?php
$code = $_GET["c"];
$con = mysql_connect("localhost","root","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("wish_list", $con);

$sql="delete from list where id='{$code}'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }else{
  header("location:index.html");
  }
mysql_close($con)
?>