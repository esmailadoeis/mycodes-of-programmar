<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   
  
$id_sale= $_GET['id_sale'];
$sql7099a="delete from s WHERE  id_sale='$id_sale'";
$result7099a=mysql_query($sql7099a);


if($result7099a=='true'){?>
<meta http-equiv="refresh"  content='0;URL=allsale.php'>
<?
}
?>