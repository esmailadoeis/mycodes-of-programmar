<?php
include("block/connect3.php"); mysql_query("SET NAMES utf8");
if(isset($_POST['submit'])){
$id= $_POST['id'];
$name= $_POST['name'];
$level= $_POST['level'];
$status=$_POST['status'];

}




        
         
           $sql="INSERT INTO group(id , name , level , status )VALUES('$id' ,  '$name' , '$level' , '$status')";  
$result=mysql_query($sql);

if($result=='true'){

 echo "succes";

}

else{
echo "eror";
}

?>
