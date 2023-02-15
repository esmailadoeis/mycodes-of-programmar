<?php
session_start();
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){
$uid=$_POST['uid'];
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
$sql="SELECT type,myusername,mypassword FROM a WHERE myusername='$myusername' and  mypassword='$mypassword' and type ='$type'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);
//$count=mysql_fetch_array($result);

if($count==1){
$_SESSION['uid']=$uid;
$_SESSION['type']=$type;
$_SESSION['myusername']=$myusername;
$_SESSION['mypassword']=$mypassword;

header("location: index.php");

}

}
?>