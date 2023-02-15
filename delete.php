
<?php
include("../block/connect2.php"); mysql_query("SET NAMES utf8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?
$id= $_GET['id'];
$sql71="delete from data WHERE  id='$id'";
$result71=mysql_query($sql71);


if($result71=='true'){?>
<meta http-equiv="refresh"  content='0;URL=del.php'>
<?
}
?>