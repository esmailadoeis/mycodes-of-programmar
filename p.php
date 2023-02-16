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
<div class="path1">جميع المنتجات<div class="path140">جميع المنتجات /ادارة المنتجات </div>
 </div>
<div onClick="window.open('','self')" class="path">  <button> اضافة منتج جديد </button>
</div>

<div class="form12">
 <div class="row justify-content-center my-5  ">
        <div class="col-6 text-center">
            <div class="input-group mb-3">search
                <input type="text" id="search" autocomplete="off" class="form-control form-control-lg" placeholder="بحث ">            </div>
        </div>
    </div>
 </div>

<table width="1000" border="1" cellspacing="5" cellpadding="5" class="table">

<thead>
<tr>

<th  class="text" width="1%">التسلسل</th>
<th  class="text" width="29%">اسم المنتج</th>
<th  class="text" width="20%">الكمية</th>
<th  class="text" width="1%">سعر الشراء </th>
<th  class="text" width="1%">سعر البيع</th>
<th  class="text" width="1%">رقم التصنيف</th>
<th  class="text" width="100%">التحكم</th>
</tr>
<?php

		 if(!isset($_GET['page'])){
		  $page=1;
		}
		 else{
		 
		    $page= $_GET['page'];
			}
$result333= mysql_query("SELECT * FROM p ");
		
$recordcount =  mysql_num_rows($result333);
	
$result3330 = mysql_query("SELECT str FROM options ");
$myrow3330 = mysql_fetch_array ($result3330);
$num = $myrow3330["str"];

		$pagecount = ceil($recordcount / $num ) ;
		if(( $page > $pagecount ) || ($page<=0)) {
		die('NO MORE PAGE');
		}
		
		$start =($page - 1 ) * $num;
		$end = $num ;
				
$result144 = mysql_query("SELECT * FROM p  limit $start , $end ");
while($myrow144 = mysql_fetch_array ($result144)){

?> <tr>
<td> <span  class="bad"> <? echo $myrow144['id_proguct']; ?> </span></td>
<td>  <span  class="bad1">   <? echo $myrow144['name_proguct']; ?>  </span>   </td>
<td>    <span  class="bad12">  <? echo $myrow144['quelity']; ?>   </span>  </td>
<td>    <span  class="bad12">  <? echo $myrow144['price_buy']; ?>   </span>  </td>
<td>    <span  class="bad12">  <? echo $myrow144['price_sale']; ?>   </span>  </td>
<td>    <span  class="bad12"> 
	

		  <? echo $myrow144['cat']; ?>
 
  </span>  </td>

<td>   <span  class="bad12"> <a href="edit_p.php?id_proguct=<? echo $myrow144['id_proguct']; ?>"><div class="path123"><button>edit</button></div></a> </span>  
  <a href="delete_p.php?id_proguct=<? echo $myrow144['id_proguct']; ?>"><div class="path1234"><button>delete</button></div></a> 
 </td>
</tr>
<?
}
?>

</thead>
</table>
</div></div>

</div>
<? 
		   $next=$page+1;
		
		
		 $prev=$page-1;
		
		 if($next<=$pagecount)
		 echo'<div class="path123456"><a href =p.php?id_proguct='.$id_proguct. '&page='.$next.'><h style="font-size:2vmin;">NEXT</h></a></div>';
		 
		     if(($next<=$pagecount)&&($prev >0))
			 echo'<h style="font-size:3vmin;">   </h>';
			 
			if($prev >0)
			
			 echo'<div class="path12345"><a href=p.php?id_proguct='.$id_proguct.'&page='.$prev.'><h style="font-size:2vmin;">PREVIUOS</a> </div>';
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

 