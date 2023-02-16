<?php
include("block1/connect3.php"); mysql_query("SET NAMES utf8");

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

<a href="logout.php"><div class=" item-bar">تسجيل الخروج</div></a>
</div></div>
 <div class="path1">dash board<div class="path140"> </div> </div>

<div class="panel">
<div class="p">عدد المنتوجات<div class="d"><? $result88 = mysql_query("SELECT  *  FROM p ");
  
  $num = mysql_num_rows ($result88);

 echo $num;
 ?>
  </div></div>
<div class="p2">عدد المستخدمين<div class="d"><? $result881 = mysql_query("SELECT  *  FROM user");
  
  $num1 = mysql_num_rows ($result881);

 echo $num1;
 ?> </div></div>
<div class="p3" >عدد المبيعات<div class="d"> <? $result882 = mysql_query("SELECT  *  FROM s ");
  
  $num2 = mysql_num_rows ($result882);

 echo $num2;
 ?>  </div></div>
<div class="p4">عدد التصنيفات<div class="d"><? $result883 = mysql_query("SELECT  *  FROM cats ");
  
  $num3= mysql_num_rows ($result883);

 echo $num3;
 ?>  </div></div>
</div>
<div class="column1">
<p>الاجماليات
</p>
</div>
<div class="t"> اجمالي المبيعات</div>
<div class="t2"><? 
$total= 0;
$result144w = mysql_query("SELECT * FROM s ");
while($myrow144w = mysql_fetch_array ($result144w)){
$n1= $myrow144w['quelity']; 
$n2= $myrow144w['price']; 


 $total2= $n1*$n2;

$total = $total +  (int)$total2;
 
 }
echo $total ;?></div>
<div class="t1">اجمالي المنتجات</div>
<div class="t2"><?
$total0 = 0;
 $result144 = mysql_query("SELECT * FROM p ");
while($myrow144 = mysql_fetch_array ($result144)){
$n11= $myrow144['quelity']; 
$n22= $myrow144['price_sale']; 
$total23= $n11*$n22;
$total0 = $total0 +  (int)$total23;
}
echo $total0 ; ?></div>

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

 