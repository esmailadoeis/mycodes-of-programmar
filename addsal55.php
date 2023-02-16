<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");
   $id_sale=$_POST['id_sale'];
  $name_custom=$_POST['name_custom'];
  $name_product=$_POST['name_product'];
  $date =$_POST['date']; 
  $quelity=$_POST['quelity'];
  $price=$_POST['price'];
  $name_product=$_POST['name_product'];
  $total=$_POST['total'];
  $status=$_POST['status'];
  $sql3377="INSERT INTO s(id_sale , name_custom ,name_product, date,quelity,price, total,status)VALUES('$id_sale' , '$name_custom','$name_product' , '$date','$quelity','$price', '$total' , '$status')";

   $result3377=mysql_query($sql3377);
        
if($result3377=='true'){?>
<meta http-equiv="refresh"  content='0;URL=addsale1.php?q=5'>
<?

}
  ?>