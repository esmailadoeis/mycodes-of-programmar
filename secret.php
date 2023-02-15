<?php
include("block/connect2.php"); mysql_query("SET NAMES utf8");

if(isset($_POST['submit'])){
		
		$code = $_POST['code'];
		}
		



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo " - $date_title";?> </title>
<meta name="description" content="<?php echo $myrow["meta_d"];?> " />
<meta name="keywords" content="<?php echo $myrow["meta_k"];?> " />
<link href="style/as.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="900"  border="0" align="center"  bgcolor="#FFFFFF" class="main_berder">
  <tr>
    <td ><img src="image/الواجهة-Recovered-Recovered33.jpg" width="900" height="165" class="style1" /></td>
  </tr>
  <tr>
  <td>
  <table width="100%" border="0"  align="right">
  <tr>
   <td width="72%" align="right"  valign ="top" >
   
         
           <?php include("block/nav.php");?>
		  <?php
		  $result600= mysql_query ("SELECT pcode FROM options");
		  if( $result600)
		  {
		    $pcode = mysql_num_rows ($result600);
		  
		 
		  }
		  else {
		  exit("فشلت في الحصول على الشفرة");
		  
		  }
		  
		  if(  $code!= $pcode)
		  {?>
		  
		<div  style="font-size:15px; color:blue;

border-color: red;


">
		  <?
       echo "<form name='sec' action = secret.php method ='POST'>
		 <p align='center'><strong> ادخل رمز المشترك </strong> </p>
		 <P align='center'> <input class ='sinput' type='text name='code'></P>
		 <P align='center'> <input class ='sbutton' type='submit' name='submit' value='ادخل من فضلك'></P>
		 </form>"; ?>
		 </div>
		 <?
		 
		  
		  
           $result = mysql_query("SELECT id,title,description,date,author,view,rating,q_vote FROM data WHERE secret=1 ");
		   
		if(!$result)
		{
		echo "<p>ادخل البيانات</p>";
		exit(mysql_error());
		}
		if(mysql_num_rows($result)>0)
		{
		$myrow = mysql_fetch_array ($result);
		do{
         $r=$myrow["rating"]/$myrow["q_vote"];
		  $r=intval($r);
		 ?>
		 <table  align="center">
		 <tr>
		
		 
		<p>  
		 <div  style="font-size:18px; color:dark;position:relative;right: 600px;">



  <img src="<? echo $myrow["mini_img"];?>"> <a href="#"> <? echo $myrow["title"];?></a><br /> (لاتمتلك صلاحية الوصول)</p></div>
		
		<div  style="font-size:12px; color:dark;



font-weight:4;position:relative;right: 602px;

"><p> تاريخ الاضافة: <? echo $myrow["date"];?> </p></div>
		
		<div  style="font-size:12px; color:dark;
margin-top:10px;

margin-bottom:10%;
font-weight:4;position:relative;right:602px;
"><p>معد الدرس: <? echo $myrow["author"];?></p></div>
		</tr>
		<tr>
		  
		 <div  style="font-size:16px; color:#666666;margin-bottom:10px;padding-top:0px;text-indent:4444;position:relative;
bottom: 50px;position:relative;right: 140px;

">  <? echo $myrow["description"];?></div>
		<div  style="font-size:12px; color:#666666;position:relative;bottom: 49px;position:relative;right: 145px;">
<p>عدد الزيارات:  <? echo $myrow["view"];?> &nbsp;&nbsp;&nbsp;&nbsp;التقييم: <? echo $r;?></p> </div> 
		</tr>
		 </tr>
		 </table>
		<?
		 
		 /*printf("<table align='center'>
		 <tr>
		 <td>
		 
		 <p><img src='%s'&nbsp;&nbsp;&nbsp;&nbsp;> <a href='#'>%s&nbsp;&nbsp&nbsp;</a>(لا تمتلك صلاحية الوصول)</p>
		 <p class='post_add'>تاريخ الاضافة:%s</p>
		 <p class='post_add'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;معد الدرس:%s</p></td>
		 </tr>
		 <tr>
		 <td>%s<p>عدد الزيارات:%s&nbsp;&nbsp; :التقييم:  %s</p></td>
		 
		 
		 </tr>
		 </table><br><br>",$myrow["mini_img"],$myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"],$myrow["view"],$r);
		 */
		  }
		  while($myrow=mysql_fetch_array($result));
		  
		   }
		
		  
		  else{
		  echo "<p> طلب المعلومات</p>";
		  exit();
	
		  }
		   }
		   
		   
 
 else{
 
 
          $result = mysql_query("SELECT id,title,description,date,author,view,rating,q_vote FROM data WHERE secret=1 ");
		   
		if(!$result)
		{
		echo "<p>ادخل البيانات</p>";
		exit(mysql_error());
		}
		if(mysql_num_rows($result)>0)
		{
		$myrow = mysql_fetch_array ($result);
		do{
         $r=$myrow["rating"]/$myrow["q_vote"];
		 $r=intval($r);
		 printf("<table align='center'>
		 <tr>
		 <td>
		 
		 <p><img src='%s'&nbsp;&nbsp;&nbsp;&nbsp;> <a href='view_post.php?id =%s'>%s&nbsp;&nbsp&nbsp;</a></p>
		 <p class='post_add'>تاريخ الاضافة:%s</p>
		 <p class='post_add'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;معد الدرس:%s</p></td>
		 </tr>
		 <tr>
		 <td>%s<p>عدد الزيارات:%s&nbsp;&nbsp; :التقييم:  %s</p></td>
		 
		 
		 </tr>
		 </table><br><br>",$myrow["mini_img"],$myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"],$myrow["view"],$r);
		 
		  }
		  while($myrow=mysql_fetch_array($result));
		  
		   }
		   
		  else{
		  echo "<p> طلب المعلومات</p>";
		  exit();
	
		  }
		  }
		  
  ?>
 
 
 
 
 
  
        </td>
<?php include("block/right.php");?>
 </tr>
 </table>
   
   
   
   
</td>
</tr>
<tr>
<td><img src="image/images (1).jpg" width="900" height="40" /></td>
</tr></table>
</body>
</html>
