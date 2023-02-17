
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
<?
include("block/connect2.php"); mysql_query("SET NAMES utf8");
$result3= mysql_query("SELECT  *  FROM  boat");

date_default_timezone_set('Africia/casablanca');



while ($myrow3 = mysql_fetch_array ($result3)){

$date=$myrow3["date"];

}
$result = mysql_query("SELECT  *  FROM  s");

while ($myrow = mysql_fetch_array ($result)){?>

		
<style>
.body {
margin:0;
padding:0;
}
.space:hover {
background-color:#18BC9C;

 
text-transform: uppercase;
cursor:pointer;
 
}

 </style>

 
<div class="container">

<div class="row py-5">

<strong> <div class="col-md-offset-4 ">
<div class="col-md-7 ">
<div class="col-md-15 ">

<h1><div class="col-md-offset-3  "> <a href="index3.php"> <button type="button" class="btn btn-warning btn-lg"><strong> docki branch</strong></button></div></h1></a>

<h1><div class="col-md-offset-4  "><strong><? echo date("M");?></strong></div></h1>

<h2><div class="col-md-offset-4  "><strong><? echo date("Y");?></strong></div></h2>

<div class="row">
<p class="lead"><h6><div class="col-xs-6 col-sm-2  ">sa</div>
<div class="col-xs-6 col-sm-2">su</div>
<div class="col-xs-6 col-sm-2">Mo</div>
<div class="col-xs-6 col-sm-2">Tu</div>
<div class="col-xs-6 col-sm-2">we</div>
<div class="col-xs-6 col-sm-2">Th</div>
</h6></div></p>

<p class="lead"><div class="col-md-2 space">
 
<? echo"<a href='list_records.php?date= ". $num1=$myrow["num1"],date("/m/Y")."'>". $num1=$myrow["num1"];" </a> <br>";  ?> </div>


<div class="col-md-2 space "><? echo"<a href='list_records.php?date= ". $num1=$myrow["num2"],date("/m/Y")."'>". $num2=$myrow["num2"];" </a> <br>";  ?></div>
<div class="col-md-2 space "><? echo"<a href='list_records.php?date= ". $num1=$myrow["num3"],date("/m/Y")."'>". $num3=$myrow["num3"];" </a> <br>";  ?></div>
<div class="col-md-2  space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num4"],date("/m/Y")."'>". $num4=$myrow["num4"];" </a> <br>";  ?>
</div>

<div class="col-md-2 space  "><? echo"<a href='list_records.php?date= ". $num1=$myrow["num5"],date("/m/Y")."'>". $num5=$myrow["num5"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num6"],date("/m/Y")."'>". $num6=$myrow["num6"];" </a> <br>";  ?></div>



<div class="col-md-2 space "><? echo"<a href='list_records.php?date= ". $num1=$myrow["num7"],date("/m/Y")."'>". $num7=$myrow["num7"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num8"],date("/m/Y")."'>". $num8=$myrow["num8"];" </a> <br>";  ?>
</div>


<div class="col-md-2 space "><? echo"<a href='list_records.php?date= ". $num1=$myrow["num9"],date("/m/Y")."'>". $num9=$myrow["num9"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num10"],date("/m/Y")."'>". $num10=$myrow["num10"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num11"],date("/m/Y")."'>". $num11=$myrow["num11"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num12"],date("/m/Y")."'>". $num12=$myrow["num12"];" </a> <br>";  ?></div>



<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num13"],date("/m/Y")."'>". $num13=$myrow["num13"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num14"],date("/m/Y")."'>". $num14=$myrow["num14"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num15"],date("/m/Y")."'>". $num15=$myrow["num15"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num16"],date("/m/Y")."'>". $num16=$myrow["num16"];" </a> <br>";  ?></div>



<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num17"],date("/m/Y")."'>". $num17=$myrow["num17"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num18"],date("/m/Y")."'>". $num18=$myrow["num18"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num19"],date("/m/Y")."'>". $num19=$myrow["num19"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num20"],date("/m/Y")."'>". $num20=$myrow["num20"];" </a> <br>";  ?>
</div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num21"],date("/m/Y")."'>". $num20=$myrow["num21"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num22"],date("/m/Y")."'>". $num20=$myrow["num22"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num23"],date("/m/Y")."'>". $num20=$myrow["num23"];" </a> <br>";  ?></div>


<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num24"],date("/m/Y")."'>". $num20=$myrow["num24"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num25"],date("/m/Y")."'>". $num20=$myrow["num25"];" </a> <br>";  ?></div>

<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num26"],date("/m/Y")."'>". $num20=$myrow["num26"];" </a> <br>";  ?></div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num27"],date("/m/Y")."'>". $num20=$myrow["num27"];" </a> <br>";  ?></div>


<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num28"],date("/m/Y")."'>". $num20=$myrow["num28"];" </a> <br>";  ?>
</div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num29"],date("/m/Y")."'>". $num20=$myrow["num29"];" </a> <br>";  ?>
</div>
<div class="col-md-2 space"><? echo"<a href='list_records.php?date= ". $num1=$myrow["num30"],date("/m/Y")."'>". $num20=$myrow["num30"];" </a> <br>";  ?>
</div></p>

    <?
 ?>
 
</div>
 
</div>
</div></strong></div></div></div>
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

          

</body>
</html>

