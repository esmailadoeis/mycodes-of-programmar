<?php

include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){

$use=$_POST['use'];
  $pass =$_POST['pass'];
  $type=$_POST['type'];
  
$sql115= mysql_query("SELECT * FROM a WHERE  use='$use' and pass=$pass'");

   $result115=mysql_query($sql115);
   
$count=mysql_num_rows($result115);

if($count==1){
header("location: home.php");

}

}
?>