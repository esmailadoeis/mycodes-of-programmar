<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   
  
$id= $_GET['id'];
$sql7038="delete from user WHERE  id='$id'";
$result7038=mysql_query($sql7038);


if($result7038=='true'){?>
<meta http-equiv="refresh"  content='0;URL=user.php'>
<?
}
?>