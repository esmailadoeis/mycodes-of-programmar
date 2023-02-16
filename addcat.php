<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   $id=$_POST['id'];
  $name_cat=$_POST['name_cat'];
  
  
  $sql20="INSERT INTO cats(id,name_cat)VALUES('$id','$name_cat')";
  
  
   $result20=mysql_query($sql20);
       
if($result20=='true'){?>
<meta http-equiv="refresh"  content='0;URL=c1.php?q=1'>
<?

}