<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
 $id=$_POST['id'];
  $name=$_POST['name'];
  $level=$_POST['level']; 
  $status=$_POST['status'];
  
 
  $sql73="update g SET name='$name', level='$level', status='$status' WHERE id='$id'";
$result73=mysql_query($sql73);


if($result73=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit.php?q=6'>
<?
}
?>