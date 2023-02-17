
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src=" js/bootstrap.min.js"></script>
    <title> Aseats system</title>
	<meta name="description" content="Aseats system">
	<meta charset="utf-8">
	<meta name="keywords" content="docki branch">
</head>
<body>
<img src="image/bb.jpg" width="1308" height="291" class="img-responsive" />
<h1><div class="col-md-offset-5  "> <a href="index1.php"> <button type="button" class="btn btn-warning btn-lg"><strong> docki branch</strong></button></div></h1>

<h1><div class="col-md-offset-5"> <a href="overview.php "><button type="button" class="btn btn-warning btn-lg"> <strong>view branch</strong></button></div></h1>
<style>
.space:hover {
 background-color:#18BC9C;
 text-decoration:none;
 
text-transform: uppercase;
cursor:pointer
font-weight:bold;
}



 </style>


<?





include("block/connect2.php"); mysql_query("SET NAMES utf8");
$result3= mysql_query("SELECT  *  FROM  boat");

date_default_timezone_set('Africia/casablanca');?>
<div class="col-md-offset-0"><a href="index1.php"> <h1><button type="button" class="btn btn-primary btn-lg  "><? $num=$_GET["date"];echo $num;  ?> </button></h1></div></a>

 <p class="py-5">
<div class="container">
<div class="row  ">

<div class="col-xs-6 col-sm-1 col-md-offset-2">10:00AM</div>
<div class="col-xs-6 col-sm-1 ">12:30PM</div>

<div class="col-xs-6 col-sm-1 ">3:00PM</div>
<div class="col-xs-6 col-sm-1 ">5:30PM</div>
<div class="col-xs-6 col-sm-1 ">8:00PM</div>
<div class="col-xs-6 col-sm-1 ">10:00PM</div>
<div class="col-xs-6 col-sm-1 ">12:30AM</div>
<div class="col-xs-6 col-sm-1 ">3:00AM</div>
<div class="col-xs-6 col-sm-1 ">6:00AM</div>
<div class="col-xs-6 col-sm-1 ">8:30AM</div>
</div>
</p>
<?


 
while ($myrow3 = mysql_fetch_array ($result3)){

$date=$myrow3["date"];

}
$result = mysql_query("SELECT  *  FROM  boat");

while ($myrow = mysql_fetch_array ($result))

{
 $id= $myrow['id'];

$_SESSION['id']=$id;
$num3 = $_SESSION['id']

?>

<p class="py-1">
<div class="container  ">
<div class="row  ">
<div class="col-md-1 space"><div class="p-2 bg-info space "><? echo $myrow['boat'];?></div></div>
<div class="col-md-1 col-md-offset-1 "><div class="p-2 bg-info"><div class="p-2 bg-info space"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space "><div class="p-2 bg-info space  "><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space "><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space "><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
<div class="col-md-1"><div class="p-2 bg-info space"><div class="p-2 bg-info space d"><a href="insert.php?b= <?   echo  $id?>">   <? echo $myrow['free1'];?> </a></div>
</div></div>
</p>
</div></div>


<?

 }
 ?>
 <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
 
 <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0 bg-secondary">
                        <h4 class="text-uppercase mb-4"></h4>
                        <p class="lead mb-0">
                           
                            <br />
                           
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                  <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"></h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"></h4>
                        <p class="lead mb-0">
                           
                            <a href="http://startbootstrap.com"></a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 lead  bg-secondary text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
     
	    </div>
		
		</nav>
</body>
</html>

