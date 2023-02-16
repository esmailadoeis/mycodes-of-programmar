<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   
  
$id= $_GET['id'];
$sql70="delete from g WHERE  id='$id'";
$result70=mysql_query($sql70);


if($result70=='true'){?>
<meta http-equiv="refresh"  content='0;URL=group.php'>
<?
}
?>