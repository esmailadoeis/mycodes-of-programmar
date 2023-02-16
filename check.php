<?php
session_start();
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){

$myusername=$_POST['name_user'];
$mypassword= $_POST['password'];
$type= $_POST['status'];
$type =stripslashes($type);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string ($mypassword);
$type =stripslashes($type);
$type = mysql_real_escape_string($type);
//$mypassword = md5($mypassword);
$sql11="SELECT name_user,password FROM user WHERE name_user='$myusername' and  password='$mypassword' and status ='$type'";
$result11=mysql_query($sql11);


$count=mysql_num_rows($result11);
echo $count;
//$count=mysql_fetch_array($result);

if($count==1){

$_SESSION['status']=$type;
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;
echo $_SESSION['username'];
header("location: http://localhost/x/home.php");

}

}
?>