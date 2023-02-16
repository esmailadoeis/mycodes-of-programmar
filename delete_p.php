<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   
  
$id_proguct= $_GET['id_proguct'];
$sql7099="delete from p WHERE  id_proguct='$id_proguct'";
$result7099=mysql_query($sql7099);


if($result7099=='true'){?>
<meta http-equiv="refresh"  content='0;URL=p.php'>
<?
}
?>