<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");


		if(isset($_GET['cat'])){$cat = $_GET['cat'];}
		if(!isset($cat)){$cat =1;}
		
		if(!preg_match("|^[\d]+$|", $cat)){
		exit("<p>تحقق من الرابطurl!</p>");
		}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../x/style/as.css">
<script src="../system/ js/bootstrap.min.js"></script>
    <title> Aseats system</title>
	<meta name="description" content="Aseats system">
	<meta charset="utf-8">
	<meta name="keywords" content="docki branch">
</head>
<body>

<div class="content">
<div class="slide-bar ">
<div class=" item-bar">القائمة</div>
<div  onClick="window.open('request3','self')" class=" item-bar">dash board</div>

 
<div id="req8" class=" item-bar" onClick="sub_menue11_open();">المستخدمين </div>
<div id="req9" style="display:none"; class=" item-bar" onClick="sub_menue11_close();">المستخدمين</div>
<div id="sub-menue11" class="sub-menue11">
<div onClick="window.open('group','self')">ادارة المجموعات</div>
<div>ادارة المستخدمين</div>
   </div>
     <div onClick="window.open('cat','self')" class=" item-bar">التصنيفات</div>
	  
<div id="req3" class=" item-bar" onClick="sub_menue1_open();">ادارة المنتجات </div>
<div id="req4" style="display:none"; class=" item-bar" onClick="sub_menue1_close();">ادارة المنتجات</div>
<div id="sub-menue1" class="sub-menue1">
<div onClick="window.open('p','self')">جميع المنتجات</div>
<div onClick="window.open('addproguct1','self')">اضافة منتج جديد</div>
  </div>
<div class=" item-bar">عرض المنتجات</div>
<div id="req1" class=" item-bar" onClick="sub_menue_open();">ادارة المبيعات</div>
<div id="req2" style="display:none"; class=" item-bar" onClick="sub_menue_close();">ادارة المبيعات</div>
<div id="sub-menue" class="sub-menue">
<div onClick="window.open('allsale','self')">جميع المبيعات </div>
   <div onClick="window.open('addsale1','self')">اضافة بيع جديد </div>
   </div>
<div id="req5" class=" item-bar" onClick="sub_menue2_open();">تقارير المبيعات</div>
<div id="req6" style="display:none"; class=" item-bar" onClick="sub_menue2_close();">تقارير المبيعات</div>
<div id="sub-menue2" class="sub-menue2">

<div onClick="window.open('request2','self')">مبيعات حسب التاريخ</div>
<div onClick="window.open('request22','self')">المبيعات الشهرية</div>
<div onClick="window.open('request4','self')">المبيعات اليومية</div>

   </div>

<div class=" item-bar">تسجيل الخروج</div>


</div></div>
<div class="path1">المنتجات<div class="e"><?  $q=$_GET['q'];if($q==4){
echo"تم اضافة المنتج بنجاح";}
?> </div></div>
<div class="add19">اضافة منتج</div>
 <div class="form">
 <form action="add_proguct66.php" method="post">
<p>اسم المنتج</p>
 <input type="text" name="name_proguct" id=""  placeholder="ادخل اسم المنتج">
<p>اختر التصنيف</p>
 <select name="cat">
	<?php   
$result0 = mysql_query("SELECT 	name_cat,id   FROM cat ");
if(!$result0)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result0)>0)
{

$myrow0 = mysql_fetch_array ($result0);
do
{
printf("<option value='%s'>%s</option>",$myrow0 ["id"],$myrow0 ["name_cat"]);
}
while($myrow0 = mysql_fetch_array ($result0));
}

 else 
 {  ?> <select name="cat"><?

		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
		  




?>

 </select>
<p>الكمية الموجودة</p>
 <input type="number" name="quelity" id=""  placeholder="ادخل الكمية">
 <p>سعر الشراء</p>
  <input type="number" name="price_buy" id=""  placeholder="ادخل سعر الشراء">
  <p>سعر البيع</p>
  <input type="number" name="price_sale" id=""  placeholder="ادخل سعر البيع">
 
 <p><input type="submit" name="submit" value="اضافة منتج"></p>
 </form></div>
<script>

function sub_menue_open(){
document.getElementById("req1").style. display="none";
document.getElementById("req2").style.display="block";
document.getElementById("sub-menue").style.height="74px";


}
function sub_menue_close(){
document.getElementById("req1").style. display="block";
document.getElementById("req2").style.display="none";

document.getElementById("sub-menue").style.height="0px";


}


function sub_menue1_open(){
document.getElementById("req3").style. display="none";
document.getElementById("req4").style.display="block";
document.getElementById("sub-menue1").style.height="74px";


}
function sub_menue1_close(){
document.getElementById("req3").style. display="block";
document.getElementById("req4").style.display="none";

document.getElementById("sub-menue1").style.height="0px";


}
function sub_menue2_open(){
document.getElementById("req5").style. display="none";
document.getElementById("req6").style.display="block";
document.getElementById("sub-menue2").style.height="112px";


}
function sub_menue2_close(){
document.getElementById("req5").style. display="block";
document.getElementById("req6").style.display="none";

document.getElementById("sub-menue2").style.height="0px";


}

function sub_menue11_open(){
document.getElementById("req8").style. display="none";
document.getElementById("req9").style.display="block";
document.getElementById("sub-menue11").style.height="74px";


}
function sub_menue11_close(){
document.getElementById("req8").style. display="block";
document.getElementById("req9").style.display="none";

document.getElementById("sub-menue11").style.height="0px";


}

</script>
</body>
</html>

 