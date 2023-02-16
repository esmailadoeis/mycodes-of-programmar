<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   $id_proguct=$_POST['id_proguct'];
  $name_proguct=$_POST['name_proguct'];
  $cat =$_POST['cat']; 
  $quelity=$_POST['quelity'];
  $price_buy=$_POST['price_buy'];
  $price_sale=$_POST['price_sale'];
  $cat=$_POST['cat'];
  $sql22="INSERT INTO p(id_proguct , name_proguct , cat,quelity,price_buy,price_sale )VALUES('$id_proguct' , '$name_proguct' , '$cat','$quelity','$price_buy','$price_sale')";
  
   $result22=mysql_query($sql22);
     
if($result22=='true'){?>
<meta http-equiv="refresh"  content='0;URL=addpp.php?q=4'>
<?

}