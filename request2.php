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
<div onClick="window.open('allsale','self')">جميع المبيعات</div>
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
<div class="path1">المبيعات حسب التاريخ<div class="path1400">المبيعات حسب التاريخ/تقرير المبيعات </div> </div>

<div class="form1">
 <form method="post">
الى تاريخ
 <input type="date" name="date1" id="" place holder="ادخل اسم المجموعة">
من تاريخ
 <input type="date" name="date2" id=""placeholder="Enter Full name">
 <button>  <input type="submit"  name="submit" class="path1236"value="بحث"></button> 
 </form></div>



<table width="1000" border="1" cellspacing="5" cellpadding="5" class="table">

<thead>
<tr>

<th  class="text" width="0%">التسلسل</th>
<th  class="text" width="30%">اسم العميل</th>

<th  class="text" width="0%">الكمية</th>
<th  class="text" width="21%">تاريخ البيع </th>
<th  class="text" width="10%">سعر البيع</th>
<th  class="text" width="10%">المجموع</th>
<th  class="text" width="27%">التحكم</th>
</tr>

<?php

$date_start=$_POST['date1'];
$date_end=$_POST['date2'];

$result144w = mysql_query("SELECT * FROM s  WHERE  date<='$date_end'and date >='$date_start' ");
if (!mysql_num_rows($result144w)){?><td><span class="bad66"><?

echo"No data in table";?></span> </td><?

}
else{
while($myrow144w = mysql_fetch_array ($result144w)){

?> <tr>
<td> <span  class="bad"> <? echo $myrow144w['id_sale']; ?> </span></td>
<td>  <span  class="bad">   <? echo $myrow144w['name_custom']; ?>  </span>   </td>

<td>    <span  class="bad">  <? echo $myrow144w['quelity']; ?>   </span>  </td>
<td>  <span  class="bad">      <? echo $myrow144w['date']; ?></span>   </td>
<td>    <span  class="bad">  <? echo $myrow144w['price']; ?>   </span>  </td>
 <? $total= $myrow144w['quelity']*$myrow144w['price'];?> 
<td>    <span  class="bad">             <?  echo $total; ?>                   </span>  </td>

<td>   <span  class="bad12"> <a href="edit_s.php?id_sale=<? echo $myrow144w['id_sale']; ?>"><div class="path123"><button>edit</button>
</div></a> </span>  
  <a href="delete_s.php?id_sale=<? echo $myrow144w['id_sale']; ?>"><div class="path1234"><button>delete</button>
  </div></a> 
 </td>
</tr>
<?
}
}
?>

</thead>
</table>

</div></div>

</div>


		 
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

 