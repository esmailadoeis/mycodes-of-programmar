<?php
include("block/connect2.php"); mysql_query("SET NAMES utf8");


		if(isset($_GET['date']))
		
		{$date = $_GET['date'];}
		else {
		exit ("لقد قمت بطلب الملف دون التحقق من المعلومات  المطلوبة");
		}
		
		$date_title = $date;
		
		$date_begin = $date;
		$date++;
		$date_end = $date;
		
	$date_begin = $date_begin. "+01";
	  $date_end =	$date_end. "-01";





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		  
           $result = mysql_query("SELECT id,title,description,date,author,view,rating,q_vote FROM data WHERE secret=0  AND date >' $date_begin' AND date <' $date_end'");
		   
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
		 $r=intval($r);?>
		 <table  align="center">
		 <tr>
		
		 
		<p>  
		 <div  style="font-size:18px; color:dark;position:relative;right: 435px;">



  <img src="<? echo $myrow["mini_img"];?>"> <a href="view_post.php?id= <? echo $myrow["id"];?>"><? echo $myrow["title"];?></a> </p></div>
		
		<div  style="font-size:12px; color:dark;



font-weight:4;position:relative;right: 440px;

"><p> تاريخ الاضافة: <? echo $myrow["date"];?> </p></div>
		
		<div  style="font-size:12px; color:dark;
margin-top:10px;

margin-bottom:10%;
font-weight:4;position:relative;right:440px;
"><p>معد الدرس: <? echo $myrow["author"];?></p></div>
		</tr>
		<tr>
		  
		 <div  style="font-size:16px; color:#666666;margin-bottom:10px;padding-top:0px;text-indent:4444;position:relative;
bottom: 50px;position:relative;right: 10px;

">  <? echo $myrow["description"];?></div>
		<div  style="font-size:12px; color:#666666;position:relative;bottom: 49px;position:relative;right: 12px;">
<p>عدد الزيارات:  <? echo $myrow["view"];?> &nbsp;&nbsp;&nbsp;&nbsp;التقييم: <? echo $r;?></p> </div> 
		</tr>
		 </tr>
		 </table>
		<?
		/* printf("<table align='center'>
		 <tr>
		 <td>
		 <p><img src='%s'&nbsp;&nbsp;&nbsp;&nbsp;> <a href='view_post.php?id=%s'>%s</a></p>
		 <p class='post_add'>تاريخ الاضافة:%s</p>
		 <p class='post_add'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;معد الدرس:%s</p></td>
		 </tr>
		 <tr>
		 <td>%s<p>عدد الزيارات:%s&nbsp;&nbsp; :التقييم:%s</p></td>
		   </td>
		 </tr>
		 
		 
		 </table><br><br>",$myrow["mini_img"],$myrow["id"],$myrow["title"],$myrow["date"],$myrow["author"],$myrow["description"],$myrow["view"],$r);
		 */
		  }
		  while($myrow=mysql_fetch_array($result));
		  
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
