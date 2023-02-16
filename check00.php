<?php
session_start();
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){
$id=$_POST['id'];
$myusername=$_POST['myusername'];
$mypassword= $_POST['mypassword'];
$type= $_POST['type'];
$type =stripslashes($type);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string ($mypassword);
$type =stripslashes($type);
$type = mysql_real_escape_string($type);
//$mypassword = md5($mypassword);
$sql="SELECT type,username,password FROM a WHERE username='$myusername' and  password='$mypassword' and type ='$type'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);
//$count=mysql_fetch_array($result);

if($count==1){
$_SESSION['uid']=$uid;
$_SESSION['type']=$type;
$_SESSION['username']=$myusername;
$_SESSION['password']=$mypassword;

header("location: home1.php");

}
else{
header("location: login1.php");
}
}
?>