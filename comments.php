<?php
include("block/connect2.php"); mysql_query("SET NAMES utf8");
?>
<script> function information(){

window.location.href='view_post.php';

}

</script>
<?



		if(isset($_POST['author']))
		
		{ $author= $_POST['author'];}
		
	if(isset($_POST['id']))
		
		{ $id= $_POST['id'];}
		if(isset($_POST['text']))
		
		{ $text= $_POST['text'];}
		if(isset($_POST['sub_com']))
		
		{ $sub_com= $_POST['sub_com'];}
		
		if(empty($author )or empty($text))
		
		{
		exit("<p>لم تقوم بتعبئة جميع البيانات,العودة الى الخلف . <br>
		 <input name='back' type='button' value='العودة الى الخلف' onclick='information();'> </p>");
		}
		$author = stripslashes($author);
		$text = stripslashes($text);
		$author =htmlspecialchars($author);
		$text =htmlspecialchars($text);
		{
		
		$date=date("y-m-d");
$result44 = mysql_query("INSERT INTO  comments (post, author,text,date)VALUES('$id', ' $author', '$text','$date')");
		$to = "bsamha2015@gmail.com";
		
		$subject = "تم اضافة تعليق جديد في الموقع";
		
		$message = " مضيف التعليق - ".$author."
		\n رابط الذهاب الى التعليق: http://bassam2021.eb2a.com/view_post.php?id=".$id."";
		 
	    $from = "from: http://bassam2021.eb2a.com/view_post.php?id=".$id."";
	
		mail($to,$subject,$message, $from);


		if(isset($_POST['author']))
		
		
		{ $author= $_POST['author'];}

$result33307 = mysql_query("SELECT  *  FROM  data WHERE id= '$id'");

while ($myrow33307 = mysql_fetch_array ($result33307)){

//$num = $myrow33307["posts"];
$date=$myrow33307["date"];
$end_date=$myrow33307["end_date"];
$url = 'view_post.php?id='.$id.'';

		}
		
		
$result445 = mysql_query("INSERT INTO  notofacation (user , url,author,wuser)VALUES('$date' ,'$url','$author','$end_date')");		

{
echo "<html><head>
<meta http-equiv='refresh'  content='0; URL=view_post.php?id=$id'>
</head></html>";
exit();


}

}

?>

</body>
</html>
