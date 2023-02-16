<?php
session_start();
$dd=$_SESSION['type'];
echo $dd ;
$dd55=$_SESSION['uid'];
echo $dd55 ;
include("../basam/admin/block1/connect3.php"); mysql_query("SET NAMES utf8");



if(!$_SESSION['username'])
{
header("location: http://localhost/s/login66.php");

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحة التحكم</title>
<link href="../basam/admin/style/as.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="900"  border="0" align="center"  bgcolor="#FFFFFF" class="main_berder">
  <tr>
    <td ><img src="../basam/admin/image/الواجهة-Recovered-Recovered33.jpg" width="900" height="165" class="style1" /></td>
  </tr>
  <tr>
  <td>
  <table width="100%" border="0"  align="right">
  <tr>
   <td width="72%" align="right"  valign ="top" >
  <? include("../basam/admin/block/header.php");?>
       
         <?php
		 if(isset($_POST['id'])){
		 
		    $id=$_POST['id'];}
		 
		 $result546= mysql_query("SELECT  *  FROM notofacation WHERE user= '$id'");
		 
		 if(!$result546)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result546)>0)
{


while ($myrow546 = mysql_fetch_array ($result546)){
?>

<a href="<? echo $myrow546['../basam/admin/url']; ?>"> <? echo $myrow546['$username'];?> </a>

<?

}
}

else{
echo "لاتوجد اشعارات حتى الان";
}
		 
		 ?>
          <p> تم تسجيل الدخول بنجاح</p>
           
           
         </td>
<?php include("../basam/admin/block/right.php");?>








 </tr>
 </table>
   
   
   
   
</td>
</tr>
<tr>
<td><img src="../basam/admin/image/images (1).jpg" width="900" height="40" /></td>
</tr></table>
</body>
</html>
