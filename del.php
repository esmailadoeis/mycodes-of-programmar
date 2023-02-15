<?php
include("../block/connect2.php"); mysql_query("SET NAMES utf8");



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>لوحة التحكم</title>
<link href="style/as.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="900"  border="0" align="center"  bgcolor="#FFFFFF" class="main_berder">
  <tr>
    <td ><img src="image/الواجهة-Recovered-Recovered33.jpg" width="900" height="165" class="style1" /></td>
  </tr>
  <tr>
  <td>
  <table width="100%" border="0"  align="right">
  <tr>
   <td width="72%" align="right"  valign ="top" >
   
         
         <?php 
         
         

		$result333061 = mysql_query("SELECT * FROM data ");
		
		?>
		<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>

</tr>
<tr>
<td align="center"><strong>العنوان</strong></td>
<td align="center"><strong>الحذف</strong></td>
</tr>




		
		
		<?
		while($myrow333061= mysql_fetch_array ($result333061)){
		
		
		
		?>
		<tr>

<td> <? echo $myrow333061['title']; ?></td>


     <td align="center"> <a href="delete.php?id=<? echo $myrow333061['id']; ?>">حذف</a><br /></td>
	 </tr>
  <?       
}
?>
</table>
</td>
</tr>
</table>
           
         </td>
<?php include("block/right.php");?>
 </tr>
 </table>
   
   
   
   
</td>
</tr>
<tr>
<td><img src="image/images (1).jpg" width="900" height="40" /></td>
</tr></table>
</body>
</html>
