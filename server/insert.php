<?php
  $con = mysql_connect("localhost","root","123456");
  if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }

  mysql_select_db("wish_list", $con);

  $sql="INSERT INTO list (title, time) VALUES ('$_POST[title]',now())";

  if (!mysql_query($sql,$con))
    {
    die('Error: ' . mysql_error());
    }
  mysql_close($con)
  ?>