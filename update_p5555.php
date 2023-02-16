<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
 $id_proguct=$_POST['id_proguct'];
  $name_proguct=$_POST['name_proguct'];
  $cat =$_POST['cat']; 
  $quelity=$_POST['quelity'];
  $price_buy=$_POST['price_buy'];
  $price_sale=$_POST['price_sale'];
  $sql734155="update p SET name_proguct='$name_proguct' , quelity=$quelity , price_buy=$price_buy ,price_sale=$price_sale  WHERE id_proguct='$id_proguct'";
$result734155=mysql_query($sql734155);


if($result734155=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit_p.php?q=9'>
<?
}
?>