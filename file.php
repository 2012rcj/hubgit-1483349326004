<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">   

    <title>99 Retail Pvt Ltd</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Call us now </p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

           <div class="collapse navbar-collapse navbar-right navbar-main-collapse">


	<ul class="nav navbar-nav">
		<li class="active">
			<?php
include 'db_const.php';
SESSION_START();

  $Mobile_No=$_SESSION['Mobile_No'];

	$CUST_ID=$_SESSION['CUST_id'];



$sql = "SELECT * FROM RETAIL_CUST  where CUST_ID='$CUST_ID' LIMIT 1 ";
$stmt = db2_prepare($conn, $sql);
$result = db2_execute($stmt);
while ($row = db2_fetch_assoc($stmt)) {
     
     $name="<b>".$row['NAME'] ."</b>";
    echo"<b>";
    echo "Hello $name";
    echo "</b>";
}
?></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret">
</b>
</a>
<ul class="dropdown-menu">
<li><a href="logout.php">Logout</a></li>

</ul>
</li>
</ul>
</div>
<!-- /.navbar-collapse -->
 </div>
 <!-- /.container -->
  </nav>
            
            <!-- /.navbar-collapse -->
     
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Pierson medical group</h2>
					</div>
					
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
                                 <div class="well well-trans">
<div class="wow fadeInRight" data-wow-delay="0.1s">
<ul class="lead-list">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold"><a href="#" onclick="toggle_visibility('foo');">Upload Your Priscription</h4>
							<p>
							1. Ensure that the picture or scan is such that the entire prescription is visible (including the doctor/clinic’s letterhead).
							2. Ensure that the picture is taken in a way that the handwriting/type is visible clearly.
							</p>

                                               </ul>	</ul>
						</div>
					</div></div></div></div>
			
					

						</div>
						


					<div id="foo" style="display:none;">
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Upload Your Priscription </h3>
									</div>
									<div class="panel-body">
	<form action="billing.php" method="POST" enctype="multipart/form-data">
	            	<input type="file" name="file" /><br>
		       
		
 		
	            	<input type="submit" class="btn" value="Upload">
	          	</form>


							</div>				
						</div>
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <


</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>

<script type="text/javascript">
<!--
   function toggle_visibility(id) {
      
        var e = document.getElementById(id);
    
        e.style.display = "block";
        
        function subm(){ 
document.forms[0].submit(); 
document.forms[1].submit(); 
} 
     
}
//--><script>
 
 
</script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
 
 <!-- adding jquery form plugin --> 
 <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script>
</body>

</html>
