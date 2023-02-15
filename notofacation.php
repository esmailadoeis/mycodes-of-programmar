<?php

include("../block/connect2.php"); mysql_query("SET NAMES utf8");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
		
		$id=$_SESSION['uid'];
		 $result546= mysql_query("SELECT  *  FROM notofacation");
		 
		 if(!$result546)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result546)>0)
{


while ($myrow546 = mysql_fetch_array ($result546)){
?>
<table align="left" width="40" height="5">
 <? 
$date = $myrow546['user'];
$end_date = $myrow546['wuser'];
?> 
<? if( $date > end_date){
 
 
 ?> <a href="<? echo $myrow546['url']; ?>"><?
 echo $date."علق على موضوع جديدلك" ;
 
 }
 
 else{
 echo $end_date."انتهاء الخدمة" ; 
 }
?>
 
 
 </a><br />
</table>
<?

}
}

else{
echo "لاتوجد اشعارات حتى الان";
}
		 
		 ?>


</body>
</html>
