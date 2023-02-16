<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
 $id=$_POST['id'];
  $name_cat=$_POST['name_cat'];
  
  $sql7341="update cats SET name_cat='$name_cat' WHERE id='$id'";
$result7341=mysql_query($sql7341);


if($result7341=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit_cat.php?q=8'>
<?
}
?>