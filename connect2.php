<?

$host="localhost";
$username="root";
$password="123";
$db_name="upload";

  $link=mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db($db_name,$link)or die("cannot select DB");
?>