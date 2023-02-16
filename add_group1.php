<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   $id=$_POST['id'];
  $name=$_POST['name'];
  $level=$_POST['level']; 
  $status=$_POST['status'];
  
  
  $sql="INSERT INTO g(id,name,level,status)VALUES('$id','$name','$level','$status')";
  
  
   $result=mysql_query($sql);
   
if($result=='true'){?>
<meta http-equiv="refresh"  content='0;URL=g1.php?q=2'>
<?

}