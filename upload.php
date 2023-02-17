


<?php
include("block/connect2.php"); mysql_query("SET NAMES utf8");


$customername = $_POST['customername'];
$numberphone = $_POST['numberphone'];
        $date = $_POST['date'];
        $time = $_POST['time'];

//print_r($_FILES['myfile']);
$new_file=$_FILES['myfile']['name'];
//$new_type=$_FILES['myfile']['type'];
//echo $f_n = $_FILES['myfile']['name'];
//echo $f_s = $_FILES['myfile']['size'];
//$x=strrchr($new_file,".");
//$type=array(".text",".doc",".pdf",".gif",".jpg",".mp4",".avi");
//if(in_array ($x,$type)){
//echo"allowed";

//}
//else{
//echo "notallowed"; exit;
//}
$x=rand(0,1000);

$myfile=$x.$new_file;
//$myfile_type=$x.$new_type;
$up_dir= "file/".$myfile;
move_uploaded_file($_FILES['myfile']['tmp_name'],$up_dir);

if(empty($customername) || empty($numberphone)|| empty($date)|| empty($time)){
 ?><p class="lead">гд Ё÷бя «ѕќб »н«д«  Ён «бЁ—«џ</p>
<a href="insert.php?b=<? echo $id  ?> "> <button type="button" class="btn btn-primary ">«б—ћжЏ «бм «бќбЁ</button></a>
<?
}

 else{
$result = mysql_query("SELECT time,date FROM cat ");
		
		while ($myrow = mysql_fetch_array ($result)){
		$num =$myrow ['time'];
		$num1 =$myrow ['date'];
		if($num ==  $time  and $num1 == $date ){
		?>
		<script>  alert('«бнжг гЌћж“ г”»ё«');
		</script>
		<meta http-equiv="refresh"  content='0;URL=insert.php'>
		<?
		exit();
		}
   
    }
	      

		  
		   $sql="INSERT INTO  cat (customername , numberphone , date , time ,myfile)VALUES('$customername' ,  '$numberphone' , '$date' , '$time' , '$myfile')";
$result666=mysql_query($sql);

if($result666=='true'){?>
<meta http-equiv="refresh"  content='0;URL=insert.php'>
 

<?
exit();

}
}




?>

</body>
</html>
