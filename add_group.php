<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");

$name = $_POST['name'];
$level = $_POST['level'];
$status =$_POST['status'];


         
           $sql="INSERT INTO group (name , level , status)VALUES('$name'  ,  '$level' , '$status')";
$result=mysql_query($sql);

if($result=='true'){

 
echo "succes";
}
else{
echo "erorr";
}


?>

