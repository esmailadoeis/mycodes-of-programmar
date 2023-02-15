<td width="29%" align="right"  valign ="top" >

<div style="font-size:16px; color:#475c6e;
margin-top:15px;
margin-left:5%;
margin-right:5%;
font-weight:bold;
text-align:center;
border-left:4px solid#4a6174;
border-bottom:1px solid#4a6174;
padding-top:6px;
padding-bottom:6px;">القائمة</div>

<?php 

$result = mysql_query("SELECT  *  FROM catagory  ");
if(!$result)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{

$myrow = mysql_fetch_array ($result);
do{


printf("<p>
<a  href='view_cat.php?cat=%s'>%s</a></p>
",$myrow["id"],$myrow["title"]);
}
while($myrow = mysql_fetch_array ($result));


}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }

?>
<br />


<div style="font-size:16px; color:#475c6e;
margin-top:15px;
margin-left:5%;
margin-right:5%;
font-weight:bold;
text-align:center;
border-left:4px solid#4a6174;
border-bottom:1px solid#4a6174;
padding-top:6px;
padding-bottom:6px;">احدث الموضوعات التي تم اضافتها </div>

<?php 

$result4 = mysql_query("SELECT  id,title  FROM data where secret=0 order by id desc limit 4 ");
if(!$result4)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result4)>0)
{

$myrow4 = mysql_fetch_array ($result4);
do{


printf("<p>
<a  href='view_post.php?id=%s'>%s</a></p>
",$myrow4["id"],$myrow4["title"]);
}
while($myrow4 = mysql_fetch_array ($result4));


}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }



?>
<div style="font-size:16px; color:#475c6e;
margin-top:15px;
margin-left:5%;
margin-right:5%;
font-weight:bold;
text-align:center;
border-left:4px solid#4a6174;
border-bottom:1px solid#4a6174;
padding-top:6px;
padding-bottom:6px;;">الارشيف</div>
<?php 
$result4 = mysql_query("SELECT DISTINCT left(date,7) AS month FROM data ORDER BY month DESC"); 
if(!$result4) {

echo"<p>فشل الاستعلام</p>";
exit(mysql_error());
}
if(mysql_num_rows($result4)>0)
{

do{
printf("<p>
<a href='view_date.php?date=%s'>%s</a></p> 
                     ",$myrow4["month"],$myrow4["month"]);
}
                                                                                           

while($myrow4 = mysql_fetch_array ($result4));


}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
?>
<div  style="font-size:16px; color:#475c6e;
margin-top:15px;
margin-left:5%;
margin-right:5%;
font-weight:bold;
text-align:center;
border-left:4px solid#4a6174;
border-bottom:1px solid#4a6174;
padding-top:6px;
padding-bottom:6px;">البحث في الموقع</div>
<form action="view_search.php" method="post" name="form_s">
<p class="search_t">  </p>
<p> <input name="search" type="text" size="25" maxlength="40" </p>
</br>
<input class="search_b" name="submit_s" type="submit" value="ابحث في الموفع" />
</p>



</form>
<?Php
$result5 = mysql_query("SELECT  * FROM file ");
if(!$result5)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result5)>0)
{

$myrow5 = mysql_fetch_array ($result5);

}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
	
		echo'<img src="files/'.$myrow5['myfile'].'" />';
		
?>
<form action ="uploadedw.php" method ="POST" enctype="multipart/form-data">
<input type="file"  name="myfile">
<input style="display:none;" type=""  name="old" value="<? echo $myrow5['myfile'] ?> ">
<input type="submit"  value="upload">

</form>

<p><a href="secret.php">القسم المخفي</a></p>

<div style="font-size:16px; color:#475c6e;
margin-top:15px;
margin-left:5%;
margin-right:5%;
font-weight:bold;
text-align:center;
border-left:4px solid#4a6174;
border-bottom:1px solid#4a6174;
padding-top:6px;
padding-bottom:6px;">احصائيات الموقع</div>
<?php
$result88 = mysql_query("SELECT  *  FROM data ");
  
  $num = mysql_num_rows ($result88);

$result99= mysql_query("SELECT  *  FROM comments "); 

 $num2 = mysql_num_rows ($result99);

echo "<p align=\"right\">  عدد الموضوعات في قاعدة البيانات :$num </br>$num2: عدد التعليقات </p>";
?>

</td>