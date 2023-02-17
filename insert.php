
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
<h1><div class="col-md-offset-5  "> <a href="index1.php"> <button type="button" class="btn btn-warning btn-lg"> <strong> docki branch</strong></button></div></h1></a>

<h1><div class="col-md-offset-5"> <a href="overview.php"> <button type="button" class="btn btn-warning btn-lg"><strong>view branch</strong></button></div></h1></a>

<style>
.form-control{         
background:     #CCCCFF;


}

</style>

<?

include("block/connect2.php"); mysql_query("SET NAMES utf8");
$b=$_GET["b"];

?>


<strong><div class="col-md-1"> <h1><button type="button" class="btn btn-primary btn-lg  ">Boat<? echo  $b=$_GET["b"];  ?>    </button></h1></div></strong>
<form  action="upload.php"  method="POST"  enctype="multipart/form-data">
<div class="form-group">
<label class="sr-only" for="exampleInputEmail2">customer name</label>
<input type="text" name="customername"class="form-control" id="exampleInputEmail2" placeholder="Enter Full name">
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword2">number phone</label>
<input type="number" name="numberphone"class="form-control" id="exampleInputPassword2" placeholder="Enter number phone">
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword2">date</label>
<input type="date" name="date" class="form-control" id="exampleInputPassword2" placeholder="Enter date">
</div>
 <div class="form-group">
<label class="sr-only" for="exampleInputPassword2">time</label>

<input type="time" name="time"class="form-control" id="exampleInputPassword2" placeholder="Enter time">
</div>
<div class="form-group">
<label class="sr-only" for="exampleInputPassword2">file</label>
<input type="file" name="myfile" accept="image/*"class="form-control"> 
</div>
<button type="submit"  class="btn btn-primary btn-lg">send</button>
</form>
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

