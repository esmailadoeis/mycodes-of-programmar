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
   
      <form name="form1"   method="post" action="add_post.php">
	 
	 <p> <label>ضع عنوان الموضوع الجديد<br />
	 <input type="text" name="title" id="title" />
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
	  <textarea name="description" id="description" cols="40" rows="5"></textarea>
	  </label>
	  </p>
	  <p><abel>ادخل نص الموضوع بالكامل<br />
	  <textarea name="text" id="text"  cols="40"rows="20"></textarea>
	  </label>
	  
	  </p>
	  <p><abel>معد الموضوع<br />
	
	 <input type="text" name="author" id="author" />
	 </label>
	 </p>
	 <p><abel>ضع رابط الصورة<br />
	
	 <input type="text" name="mini_img" id="img" />
	 </label>
	 </p>
	  <p><label>
	  <input name="id" type="hidden" value=" <?php echo "$id";?>" />
	 </label></p>
 <label>           القسم المخفي      </label>  <br />
	 نعم <input name="secret" type="radio" value="1"  /><br />
	 لا <input name="secret" type="radio" value="0"  />
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
	   
	 <input type="submit" name="submit" id="submit"  value="اعتماد الموضوع الجديد"/>
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
