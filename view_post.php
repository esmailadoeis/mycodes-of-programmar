<?php
include("../block/connect2.php"); mysql_query("SET NAMES utf8");


		if(isset($_GET['id'])){$id= $_GET['id'];}
		if(!isset($id)){$id =1;}
		


$result = mysql_query("SELECT  *  FROM  data WHERE id= '$id'");
if(!$result)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{

$myrow = mysql_fetch_array ($result);


$new_view=$myrow["view"]+1;
$update= mysql_query("UPDATE data SET view = '$new_view' WHERE id='$id'");


}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
		  




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo " - $myrow2[title]";?> </title>
<meta name="description" content="<?php echo $myrow2["meta_d"];?> " />
<meta name="keywords" content="<?php echo $myrow2["meta_k"];?> " />
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
   <td width="72%" align="right"  valign ="top" dir="rtl">
   
         
          
		
         
		 <div  style="font-size:18px; color:red;

font-weight:bold;




"> <? echo $myrow["title"];?></div>
		
		 <div  style="font-size:12px; color:dark;



font-weight:4;




"> تاريخ الاضافة: <? echo $myrow["date"];?><br></div>
		 
		 <div  style="font-size:12px; color:dark;
margin-top:10px;

margin-bottom:10%;
font-weight:4;

">  معد الدرس:<? echo $myrow["author"];?></div>     
           <div  style="font-size:16px; color:#666666;margin-bottom:10px;padding-top:0px;text-indent:4444;position:relative;
bottom: 50px;

">
		     <?  echo $myrow["text"];?></div>
			  
		 <div  style="font-size:12px; color:#666666;position:relative;bottom: 49px;">






عدد الزيارات:<? echo $myrow["view"];?></div><?
		  /*
		 printf("
		
		 <p  class='post_title'>      %s      </p>
		 
		 <p class='post_adds'>تاريخ الاضافة: %s </p>
		 <p class='post_adds'>معد الدرس: %s    </p>
	
		 %s <p class='post_view'> عدد الزيارات:%s </p>
		 
		<br><br>",$myrow["title"],$myrow["date"],$myrow["author"],$myrow["text"],$myrow["view"]);
		*/
		 
		?> 

		
		 <form action="vote_res.php" method="post" name="vv">
		 <div style=" 
border:1px solid gray;
ackground-color:#f6f6f6;
margin-left:10px;padding:10px;">
		
		 ضع تعليقك:1
		 <input name="score" type="radio" value="1" />2
		  <input name="score" type="radio" value="1" />3
		   <input name="score" type="radio" value="1" />4
		    <input name="score" type="radio" value="1" />5
			 <input name="score" type="radio" value="5" checked />
			 <input class="sub_vote" name="submit" type="submit" value="التقييم" /></div>
			 <input name="id" type="hidden" value="<?php echo "$id";?>">
			
			
			 </form>
			<div style=" 
border:0px solid gray;
ackground-color:#f6f6f6;color:blue;
margin-left:10px;"> <?php
			 echo "<P>التعليق على الموضوع</p>";?></div> <?
			$result55 = mysql_query("SELECT  *  FROM  comments WHERE post='$id'");
			 
			 if(mysql_num_rows($result55)>0)
			 {
			 $myrow55 = mysql_fetch_array ($result55);
			 do{
			 printf("<div  class='post_dive'>
			 <P>قام باضافة التعليق:<strong>%s</strong></p>
			 <p>اضافة تاريخ التعليق:<strong>%s</strong></p>
			 <p>اضافة نص التعليق:<br> %s</p>
			 </div>",$myrow55["author"],$myrow55["date"],$myrow55["text"]);
		
			 }
			 while( $myrow55 = mysql_fetch_array ($result55));
			 
			 }
			
			 ?>
			 
			 <p>اضف تعليق</p>
			  <form action="comments.php" method="post" name="from_com">
			  <P> <label>الاسم:</label><input name="author" type="text" size="30" maxlength="30" /></P>
			  <p><label>محتوى التعليق:</label><br /><textarea name="text" cols="32" rows="4"></textarea></textarea></p>
			   <input name="id" type="hidden" value=" <?php echo "$id";?>" />
			 <p>  <input class="sub_vote" name="submit" type="submit" value="اضف ردك" /></P>
			 </form>
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
