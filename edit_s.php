<? include("block1/connect3.php"); mysql_query("SET NAMES utf8");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/as.css">
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
<div onClick="window.open('user','self')">ادارة المستخدمين</div>
   </div>
    <div onClick="window.open('cat','self')" class=" item-bar">التصنيفات</div>
	  
<div id="req3" class=" item-bar" onClick="sub_menue1_open();">ادارة المنتجات </div>
<div id="req4" style="display:none"; class=" item-bar" onClick="sub_menue1_close();">ادارة المنتجات</div>
<div id="sub-menue1" class="sub-menue1">
<div onClick="window.open('p','self')">جميع المنتجات</div>
<div onClick="window.open('addpp','self')">اضافة منتج جديد</div>
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
<div class="path1">تعديل المبيعات <div class="e"><?  $q=$_GET['q'];if($q==10){
echo"تم تعديل المبيعات بنجاح";}








?></div></div>
<?

$result1777d = mysql_query("SELECT * FROM s  WHERE  id_sale='$id_sale' ");
$myrow1777d = mysql_fetch_array ($result1777d);
?>

 <div class="form">
 <form name="form1"    method="post" action="update_s5555.php">
<p>اسم العميل </p>
 <input type="text" name="name_custom" id="name_proguct"  value="<? echo $myrow1777d['name_custom']; ?>"> 
<p>الكمية</p>
 <input type="number" name="quelity" id="quelity" value="<? echo $myrow1777d['quelity']; ?>">
 <p>تاريخ البيع</p>
 <input type="date" name="date" id="quelity" value="<? echo $myrow1777d['date']; ?>">
 <p>سعر البيع</p>
 <input type="number" name="price" id="quelity" value="<? echo $myrow1777d['price']; ?>">
  <p>المجموع</p>
   <? $total= $myrow1777d['quelity']*$myrow1777d['price'];?>
  
 <input type="number" name="total" id="quelity" value="<? echo  $total; ?>">
 <input name="id_sale" type="hidden" id="id_sale" value="<? echo $myrow1777d['id_sale']; ?>">
 <p><input type="submit"  name="submit"value="تعديل"></p>
 </form></div>
 <?
 
 ?>
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

 