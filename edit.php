<?php
include("../block/connect2.php"); mysql_query("SET NAMES utf8");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
   <?
   $id = $_GET['id'];
   $result33308= mysql_query("SELECT * FROM data WHERE  id='$id'");
		$myrow33308 = mysql_fetch_array ($result33308);
		
		
  
   ?>
   
      <form name="form1"   method="post" action="update.php">
	 
	 <p> <label>ضع عنوان الموضوع الجديد<br />
	 <input type="text" name="title" id="title"  value="<? echo $myrow33308['title'];?> " />
	 </label>
	 </p> 
	 
	<p><abel>ادخل وصفا جديد للموضوع<br />
	 
	 
	 <input type="text" name="meta_d" id="meta_d" />
	 </label>
	 </p>
	 <p><abel>ادخل الكلمات المفتاحية للموضوع<br />
	
	 <input type="text" name="meta_k" id="meta_k" />
	 </label>
	 </p>
	 
	 
	 <p><abel>ادخل التاريخ<br />
	  <input  name="date" type="text" id="date"    value="<?php $date=date("y-m-d");echo $date;?>" />
	  </label>
	  </p>
	  <p><abel>ادخل وصفا مختصر للموضوع<br />
	  <textarea name="description" id="description" cols="40" rows="5"> <? echo $myrow33308['description'];?> </textarea>
	  </label>
	  </p>
	  <p><abel>ادخل نص الموضوع بالكامل<br />
	  <textarea name="text" id="text"  cols="40"rows="20">  <? echo $myrow33308['text'];?> </textarea>
	  </label>
	  
	  </p>
	  <p><abel>معد الموضوع<br />
	
	 <input type="text" name="author" id="author"  value="<? echo $myrow33308['author'];?> "/>
	 </label>
	 </p>
	 <p><abel>ضع رابط الصورة<br />
	
	 <input type="text" name="mini_img" id="img"value="<? echo $myrow33308['mini_img'];?> " />
	 </label>
	 </p>
	 
	 
	   <p><abel>حدد القائمة التي ينتمي اليها الموضوع<br />
	   <select name="cat">
	<?php   
$result = mysql_query("SELECT title,id   FROM catagory ");
if(!$result)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{

$myrow = mysql_fetch_array ($result);
do
{
printf("<option value='%s'>%s</option>",$myrow ["id"],$myrow ["title"]);
}
while($myrow = mysql_fetch_array ($result));
}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
		  




?>
	   </select>
	   
	   </label>
	   </p>
	  <input name="id" type="hidden" id="id" value="<? echo $myrow33308['id'];?> "/>
	 <input type="submit" name="submit" id="submit"  value="تعديل الموضوع الجديد"/>
	 </label>
	 </p> 
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
