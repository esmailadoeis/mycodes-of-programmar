<?php
include("../block/connect2.php"); mysql_query("SET NAMES utf8");

if(isset($_POST['title']))      {$title = $_POST['title'];  if($title =='') {unset($title);}   }


if(isset($_POST['meta_d']))       {$meta_d= $_POST['meta_d'];  if($meta_d  ==''){unset($meta_d);}}

if(isset($_POST['meta_k']))      {$meta_k = $_POST['meta_k'];  if($meta_k  ==''){unset($meta_k);}}

if(isset($_POST['date']))        {$date = $_POST['date'];  if($date  ==''){unset($date);}}

if(isset($_POST['description']))  {$description= $_POST['description'];  if($description =''){unset($description);}}

if(isset($_POST['text']))         {$text = $_POST['text'];  if($text ==''){unset($text);}}
if(isset($_POST['author']))     {$author = $_POST['author'];  if($author ==''){unset($author);}}
if(isset($_POST['cat']))         {$cat = $_POST['cat'];  if($cat ==''){unset($cat);} }

if(isset($_POST['secret']))     {$secret = $_POST['secret'];  if($secret ==''){unset($secret);}}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>صفحة المعالجة</title>
<link href="../style/as.css" rel="stylesheet" type="text/css" />

</head>

<body>
<table width="900"  border="0" align="center"  bgcolor="#FFFFFF" class="main_berder">
  <tr>
    <td ><img src="../image/الواجهة-Recovered-Recovered33.jpg" width="900" height="165" class="style1" /></td>
  </tr>
  <tr>
  <td>
  <table width="100%" border="0"  align="right">
  <tr>
   <td width="72%" align="right"  valign ="top" >
   
        
          
       <?php
	   if(isset($title) && isset($meta_d)&& isset($meta_k)&& isset($date) && isset($description)&& isset($text)&& isset($author)&&  isset($cat)&&isset($secret))
           
         {
		 $result=mysql_query("INSERT INTO  data (title,meta_d,meta_k,date,description,text,author,cat,secret) VALUES('$title','$meta_d','$meta_k','$date','$description','$text','$author','$cat','$secret')");
		echo  $result;
	
	}
	
	
	
	
	
	?>
	
		   
        </td>
<?php include("block/right.php");?>
 </tr>
 </table>
   
   
   
   
</td>
</tr>
<tr>
<td><img src="../image/images (1).jpg" width="900" height="40" /></td>
</tr></table>
</body>
</html>
