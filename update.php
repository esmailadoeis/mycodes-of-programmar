
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
$sql7="update data SET title='$title', text='$text', description='$description',author='$author',date='$date',cat='$cat',meta_d='$meta_d',meta_k='$meta_k',secret='$secret',mini_img='$mini_img' where id='$id'";
$result7=mysql_query($sql7);


if($result7=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit.php'>
<?
}
?>