<?php
session_start();
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){

$myusername=$_POST['use'];
$mypassword= $_POST['pass'];
$$status= $_POST['status'];
$$status =stripslashes($status);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string ($mypassword);
$status =stripslashes($status);
$$status = mysql_real_escape_string($status);
//$mypassword = md5($mypassword);
$sql="SELECT username,password,type FROM a WHERE username='$myusername' and  password='$mypassword' and type='$status'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);
//$count=mysql_fetch_array($result);
echo $count;
if($count==1){

$_SESSION['status']=$type;
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;

header("location: http://localhost/s/home.php");

}

}
?>