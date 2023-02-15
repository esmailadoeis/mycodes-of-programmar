<?php
include("block/connect2.php"); mysql_query("SET NAMES utf8");


		if(isset($_POST['score']))
		
		{ $score= $_POST['score'];}
		
	if(isset($_POST['id']))
		
		{ $id= $_POST['id'];}
$result = mysql_query("SELECT  rating,q_vote FROM  data WHERE id= '$id'");
if(!$result)
{
echo"<p>فشل الاستعلام</p>";

exit(mysql_error());
}
if(mysql_num_rows($result)>0)
{

$myrow = mysql_fetch_array ($result);

$new_rating =$myrow['rating']+ $score;
$new_q_vote =$myrow['q_vote']+1;

$update= mysql_query("UPDATE data SET rating = '$new_rating', q_vote='$new_q_vote' WHERE id='$id'");

if($update){
echo "<html><head>
<meta http-equiv='refresh'  content='0; URL=view_post.php?id=$id'>
</head></html>";
exit();
}
}

 else 
 {
		  echo "<p> طلب المعلومات</p>";
		  exit();
		  }
		  




?>

</body>
</html>
