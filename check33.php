<?php
session_start();
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


if(isset($_POST['submit'])){

$name_user =$_POST['name_user'];
$password= $_POST['password'];
$status= $_POST['status'];
$status =stripslashes(status);
$name_user = stripslashes($name_user);
$password = stripslashes($password);
$name_user = mysql_real_escape_string($name_user);
$password = mysql_real_escape_string ($password);

echo $name_user;
$sql11="SELECT name_user,password FROM user WHERE name_user='$name_user' and  password='$password'";
$result11=mysql_query($sql11);


$count=mysql_num_rows($result11);
echo $count;
if($count==1){

$_SESSION['status']=$status;
$_SESSION['name_user']=$name_user;
$_SESSION['password']=$password;

header("location: home.php");

}

}
?>