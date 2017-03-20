<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>99 retail Solution Pvt Ltd</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
      <link href="simpletreemenu.js" rel="stylesheet"  />
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
					<p class="bold text-right">Call us now ---</p>
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

           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Hemas medical group</h2>
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
							<h4 class="h-bold"> Your Uploaded Priscription </h4>
							<p>
							The Priscription you have Uploaded should be given by the doctors consult 							</p>

                                               </ul>	</ul>
						</div>
					</div></div></div></div>
			
					

						</div>
						


					
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Your Priscription </h3>
									</div>
									<div class="panel-body">

<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))

&& ($_FILES["file"]["size"] < 100000000))
{
if ($_FILES["file"]["error"] > 0)
{
echo "File Error : " . $_FILES["file"]["error"] . "<br />";
}else {
 $_FILES["file"]["name"] . "<br />";
 $_FILES["file"]["type"] . "<br />";
 ($_FILES["file"]["size"] / 1024) . " Kb<br />"; 


if (file_exists("images/".$_FILES["file"]["name"]))
{
echo "<b>".$_FILES["file"]["name"] . " already exists. </b>";
}else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"images/". $_FILES["file"]["name"]);
"Stored in: " . "images/" . $_FILES["file"]["name"]."<br />";
?>

<img src="images/<?php echo $_FILES["file"]["name"]; ?>" alt="Image path Invalid" style="width:100%;height:100%"  >
<?php
}
}
}else
{
echo "Invalid file detail ::<br> file type ::".$_FILES["file"]["type"]." , file size::: ".$_FILES["file"]["size"];
}
?>

										</div>
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
<script>
	$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
        if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    });
});
	</script>
	<!-- Section: boxes -->
   
	
<div class="line">
 <section id="boxes" class="home-section paddingtop-80"> 

<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
							
<i class="fa fa-check fa-3x circled bg-skin"></i>
<h4 class="h-bold"><a href="#section1" onclick="toggle_visibility('foo1');">Want to Add Some More Medicines</h4></a>
<p>
Add some more medicines beyond your priscription 
</p>
</div>
</div>
</div>
<div class="col-sm-3 col-md-3">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
<h4 class="h-bold"><a href="#" onclick="toggle_visibility('foo');">Make Billing</h4></a>
<p>
Fill your address and order will be delivered at home  
</p>
</div>
</div>
</div>
				
<div class="col-sm-3 col-md-3">
<div class="wow fadeInUp" data-wow-delay="0.2s">
<div class="box text-center">
<i class="fa fa-user-md fa-3x circled bg-skin"></i>
<h4 class="h-bold">Consult A Doctor</h4>
<p>
Need A doctor Make An appiontment
</p>
</div>
</div>
</div>

</div>
<div id="foo" class="wow fadeInDown" style="display:none;">
<section id="boxes" class="home-section paddingtop-80">
<div class="container">
<div class="row">
<div class="col-sm-3 col-md-3">
<div class="well well-trans">
<div class="wow fadeInRight" data-wow-delay="0.1s">
<ul class="lead-list">		
<div class="form-wrapper">

<div class="panel panel-skin">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>BILLING INFO</h3>
</div>
<div class="panel-body">

						
						<title>Billing Info</title>



<script language="javascript">
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
   
    f.Address.value = f.address.value;
  }
}
 function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;

}	
function validate(){
		var f=document.form1;
                if(f.mobile_no.value=='')
                 {

                alert('Your phone number is required');
                f.mobile_no.focus();
return false;


}
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}

		f.command.value='update';
		f.submit();
	}
</script>  


</head>





<body> 



<form name="form1" onsubmit="return validate()" method="POST" action="paybycash.php">
    	
<div align="center">
        <h1 align="center">Billing Info</h1> 

 
 <table  width="500" height="500" border="0"  cellpadding="1px">   

            <tr><td>Order Total:</td><td><input type="text" readonly="readonly" value="<?php session_start();
echo $_SESSION['Total'];?>" </td></tr>
             
<tr><td>Phone:</td><td><input type="text" name="mobile_no" required maxlength="10" onkeypress="javascript:return isNumber(event)" </td></tr>
            <tr><td>Your Name:</td><td><input type="text" name="name"  /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="e_mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  </td></tr>
            <tr><td>Shipping Address:</td><td><textarea name="shippingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            <tr><td>CheckBox:</td><td><input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">
              Check this box if Billing Address and Shipping are the same</td></tr>
                 
             <tr><td>Billing Address:</td><td><textarea name= "billingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            
            
            <tr><td>&nbsp;</td><td><input type="submit"class ="myButton" value="Confirm Order"  /></td></tr>
        </table>
	</div>
</div>
</form>
</body>
	
</form>
				</div></div>
					</div>
				</div>
				</div>
				</div></div></div>
			
		

	</section></div>
	<div id="section1">
	<div id="foo1" class="wow fadeInDown" style="display:none;">
<section id="boxes" class="home-section paddingtop-80">

<div class="wow fadeInRight" data-wow-delay="0.1s">
<div class="panel panel-skin">
<div class="panel-heading">
<h3 class="panel-title"><span class="fa fa-pencil-square-o">
</span> Medicines Available In Stores </h3>
</div>
<div class="panel-body">
						
<?php
// include database configuration file
include 'db_const.php';
?>

    
   



<link href="style.css" rel="stylesheet">

<style type="text/css">




.btnLink{
	display: inline-block;
	padding: 10px 20px;
	border: 1px solid #006699;
	border-radius: 4px;
	background-color: #00978DF;
	color: White;
	text-decoration: none;
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
	box-shadow: 0 3px 4px 1px rgpa(0,0,0,.2) inset;
	box-shadow: 2px 2px 4px 1px rgpa(0,0,0,.5);
	background-image:-webkit-linear-gradient(top,#006B9F,#0FB1FF);
	background-image: linear-gradient(to Bottom,#006B9F,#0FB1FF);
	
	
}
.pg-normal { 
color: #000000; 
font-size: 15px; 
cursor: pointer; 
background: #C2B280; 
padding: 2px 4px 2px 4px; 
}

.pg-selected { 
color: #fff; 
font-size: 15px; 
background: #C2B280; 
padding: 2px 4px 2px 4px; 
}

</style>



<script type="text/javascript">




function Pager(tableName, itemsPerPage) {

this.tableName = tableName;

this.itemsPerPage = itemsPerPage;

this.currentPage = 1;

this.pages = 0;

this.inited = false;

this.showRecords = function(from, to) {

var rows = document.getElementById(tableName).rows;

// i starts from 1 to skip table header row

for (var i = 1; i < rows.length; i++) {

if (i < from || i > to)

rows[i].style.display = 'none';

else

rows[i].style.display = '';

}

}

this.showPage = function(pageNumber) {

if (! this.inited) {

alert("not inited");

return;

}

var oldPageAnchor = document.getElementById('pg'+this.currentPage);

oldPageAnchor.className = 'pg-normal';

this.currentPage = pageNumber;

var newPageAnchor = document.getElementById('pg'+this.currentPage);

newPageAnchor.className = 'pg-selected';

var from = (pageNumber - 1) * itemsPerPage + 1;

var to = from + itemsPerPage - 1;

this.showRecords(from, to);

}

this.prev = function() {

if (this.currentPage > 1)

this.showPage(this.currentPage - 1);

}

this.next = function() {

if (this.currentPage < this.pages) {

this.showPage(this.currentPage + 1);

}

}

this.init = function() {

var rows = document.getElementById(tableName).rows;

var records = (rows.length - 1);

this.pages = Math.ceil(records / itemsPerPage);

this.inited = true;

}

this.showPageNav = function(pagerName, positionId) {

if (! this.inited) {

alert("not inited");

return;

}

var element = document.getElementById(positionId);

var pagerHtml = '<span onclick="' + pagerName + '.prev();" class="pg-normal">< </span> ';

for (var page = 1; page <= this.pages; page++)

pagerHtml += '<style id="pg' + page + '" class="pg-normal;"></style> ';

pagerHtml += '<span onclick="'+pagerName+'.next();" class="pg-normal"> ></span>';

element.innerHTML = pagerHtml;

}

}
</script>
<SCRIPT TYPE="text/javascript"> 
function popup(mylink, windowname) 
{
	if (! window.focus)return true;
	var href; if (typeof(mylink) == 'string') href=mylink; 
	else href=mylink.href; 
	window.open(href, windowname, 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=800,height=500'); 
	return false; 
	} 
	</SCRIPT>



<table id="tablepaging" class="table_fields" cellspacing="5px" width="150px" >
  
        <?php
       $count=0;
        //get rows query
        $stmt = "SELECT * FROM RETAIL_STORE_PROD WHERE STORE_ID='1472222821'";
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
           
        if(!empty($stmt)){
        
            while($row = db2_fetch_assoc($result)){
if($count == 3) {
                $count = 0;
                echo "</tr> <tr>";
        }
         echo "<td>"                
                
        ?>

        	 
            <td><b><?php echo $row['PROD_NM']?></b><br /><br />
            		
                    Price:<big style="color:green">
                    	Rs<?php echo $row['MRP']?></big><br /><br />
                   
                 
 <a class="btnLink" href="viewCart.php?action=addToCart&PROD_ID=<?php echo $row["PROD_ID"]; ?>" onClick="return popup(this, 'notes')">Add to cart</a></in>
                  </td></td>
		
        
 

        <?php 
        
        $count++;
        }
 
       }
 else
       { ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
        </table>
    

<div id="pageNavPosition" style="padding-top: 20px" align="center">
</div>
<script type="text/javascript">
var pager = new Pager('tablepaging',1);
pager.init();
pager.showPageNav('pager', 'pageNavPosition');
pager.showPage(1);   
</script>
    
 </form>

</div>
</div>
</div>
</div>
</div>
</section>
</div>

    </div>
</div>
<>    

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

 <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
 
 <!-- adding jquery form plugin --> 
 <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script>
<script type="text/javascript">

function toggle_visibility(id) {
            if (document.getElementById('foo')) {

                if (document.getElementById('foo1').style.display == 'none') {
                    document.getElementById('foo1').style.display = 'block';
                    document.getElementById('foo').style.display = 'none';
                }
                else {
                    document.getElementById('foo1').style.display = 'none';
                    document.getElementById('foo').style.display = 'block';
                }
            }
}




</script>


</body>




<?php
require("footer.php");
?>
</html>
