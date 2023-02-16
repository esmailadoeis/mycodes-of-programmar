<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   
  
$id= $_GET['id'];
$sql70381="delete from cats WHERE  id='$id'";
$result70381=mysql_query($sql70381);


if($result70381=='true'){?>
<meta http-equiv="refresh"  content='0;URL=cat.php'>
<?
}
?>