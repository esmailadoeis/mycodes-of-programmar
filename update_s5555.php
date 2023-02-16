<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
 $id_sale=$_POST['id_sale'];
  $name_custom=$_POST['name_custom'];
  
  $quelity=$_POST['quelity'];
  $price=$_POST['price'];
  $date=$_POST['date'];
   $total=  $quelity*$price;
  $sql73415566="update s SET name_custom='$name_custom' , quelity='$quelity' , price='$price',date='$date',total='$total'  WHERE id_sale='$id_sale'";
$result73415566=mysql_query($sql73415566);


if($result73415566=='true'){?>
<meta http-equiv="refresh"  content='0;URL=edit_s.php?q=10'>
<?
}
?>