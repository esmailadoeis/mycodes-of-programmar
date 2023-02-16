<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   $id=$_POST['id'];
  $name_user=$_POST['name_user'];
  $password =$_POST['password'];
  $status=$_POST['status'];
  
  
  $sql2="INSERT INTO user(id,name_user,password,status)VALUES('$id','$name_user','$password','$status')";
  
  
   $result2=mysql_query($sql2);
        
if($result2=='true'){?>
<meta http-equiv="refresh"  content='0;URL=u1.php?q=3'>
<?

}