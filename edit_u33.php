<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
 $id=$_POST['id'];
  $name_user=$_POST['name_user'];
  $password=$_POST['password']; 
  $status=$_POST['status'];
  
 
  $sql734="update user SET name_user='$name_user', password='$password', status='$status' WHERE id='$id'";
$result734=mysql_query($sql734);


if($result734=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit_user.php?q=7'>
<?
}
?>