
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
<script src=" js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<img src="image/bb.jpg" width="1308" height="291" class="img-responsive" />

<div class="container">
<div class="row">
<h1><div class="col-md-offset-5  "> <a href="index3.php"> <button type="button" class="btn btn-warning btn-lg"> <strong>docki branch</strong></button></a></div></h1>

<h1><div class="col-md-offset-5"> <a href="index3.php "><button type="button" class="btn btn-warning btn-lg"> <strong>view branch</strong></button></a></div></h1>

</div></div>

<style>
.body {
margin:0;
padding:0;
}
.space {

pading:6px;
}

 </style>



<?

include("block/connect2.php"); mysql_query("SET NAMES utf8");

$result44 = mysql_query("SELECT * FROM cat ");
		$id=$_GET['id'];
		while ($myrow44= mysql_fetch_array ($result44)){?>
		<table class="table"><p class="display-1">
		<div class="container">
		<div class="row">
		<strong><div class="col-xs-6 col-sm-2  col-md-offset-0"><div class="p-2 bg-primary"><? echo $myrow44['customername']?>: اسم العميل</div></div>
<div class="col-xs-6 col-sm-2  "><div class="p-2 bg-primary"><? echo $myrow44['numberphone']?>: رقم التلفون</div></div>
<div class="col-xs-6 col-sm-2   "><div class="p-2 bg-primary"><? echo $myrow44['date']?>: تاريخ الحجز</div></div>
<div class="col-xs-6 col-sm-2"><div class="p-2 bg-primary"><? echo $myrow44['time']?>: وقت الحجز</div></div>
<div class="col-xs-6 col-sm-2"><img src="file/<? echo $myrow44['myfile']?>" alt="Responsive image"class="img-thumbnail"width="90" height="50"></div></strong>

</div></div></p>
		
		</table>
		
  


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

