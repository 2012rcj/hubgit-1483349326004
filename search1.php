<?php
// include database configuration file
include 'header.php';
?>
	

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Pierson Medical Shop</h2>
					</div>
					
	
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
                                 <div class="well well-trans" style="width:auto;height:auto">
<div class="wow fadeInRight" data-wow-delay="0.1s">
<ul class="lead-list">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
		
														<?php
// include database configuration file
include 'db_const.php';
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
// redirect to home if cart is empty
if($cart->total_items() <= 0){
   // header("Location: index.php");
}
// set customer ID in session
$_SESSION['sessCustomerID'] = 1;
?> 



    
    <table border="0" table-layout="fixed" class="table_fields"  id="tablepaging"cellpadding="2px" cellspacing="20px"  width="100px">
    <thead>
        <tr class="table_fields_top">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();
        
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
            	
$_SESSION['Prod_Nm']=$item["PROD_NM"];
$_Session['Price']=$item["price"];
$_Session['Qty']=$item["qty"];
$_Session['Subtotal']=$item["subtotal"];
$_Session['Prod_Id']=$item["PROD_ID"]
?>
        
       <tr class="table_fields_top">
            <td word-wrap="break-word"><?php echo $item["PROD_NM"]; ?></td>
            <td><?php echo 'Rs'.$item["price"].''; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs'.$item["subtotal"].''; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="2"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){
            	$_SESSION['Total']=$cart->total();
            	?>
            <td class="text-center"><strong>Total <?php echo 'Rs'.$cart->total().''; ?></strong></td>
            <?php } ?>
    
        <a href="billing.php">  Continue Shopping</a>
       
    
    
    
</tr>

    </tfoot>
    </table>

						</div>
					</div></div></div>
			
		</div></div>	</div><div>		

						</div>
						


					
					<div class="col-lg-6">
						<div class="form-wrapper">
			 			<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						          
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Order Details </h3>
									</div>
									<div class="panel-body">
				<title>Billing Info</title>



<script language="javascript">
function FillBilling(f) {
  if(f.billingtoo.checked == true) {
   
    f.billingaddress.value=f.shippingaddress.value;
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








<body> 


<style>

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}


</style>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <?php
// include databse configuration file
include 'db_const.php';
// initializ shopping cart class
include 'Cart.php';

$cart = new Cart;
// redirect to home if cart is empty
// set customer ID in session
?>

    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    
    table {
  font-family: "Helvetica Neue", Helvetica, sans-serif
}
caption {
  text-align: left;
  color: white;
  font-weight: bold;
  text-transform: uppercase;
  padding: 2px;
}
thead {
  background: SteelBlue;
  color: white;
}
th,
td {
  padding: 2px 4px;
}
tbody tr:nth-child(even) {
  background: White;
}
tbody tr td:nth-child(2) {
  text-align:center;
}
tbody tr td:nth-child(3),
tbody tr td:nth-child(4) {
  text-align: right;
  font-family: monospace;
}
tfoot {
  background: SeaGreen;
  color: white;
  text-align: right;
}
tfoot tr th:last-child {
  font-family: monospace;
}
   
    .table{width: 20%;float: left;}
    .shipAddr{width: 20%;float: left;margin-left: 10px;}
    .footBtn{width: 20%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
<h1>Order Summary</h1>
<div class="container">

       <?php
        session_start();
  
  //-------sending customer information-----------//
  
$name=$_POST['name'];
$Mobile_No =$_POST['mobile_no'];
$E_mail =$_POST['e_mail'];
$ShippingAddress =$_POST['shippingaddress'];
$BillingAddress =$_POST['billingaddress'];
    ?>
    <table>
    <tr><th>Name:</th><td><?php echo $name; ?></td></tr>
<tr><th>Mobile_NO:</th><td><?php echo $Mobile_No; ?></td></tr>
<tr><th>E_Mail:</th><td><?php echo $E_mail; ?></td></tr>
<tr><th>ShippingAddress:</th><td><?php echo $ShippingAddress; ?></td></tr>
<tr><th>BillingAddress:</th><td><?php echo $BillingAddress; ?></td></tr>
     
   <table>
  
  <thead>
   <tr class="table_fields_top">
            <th>ORDER_ID</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
  </thead>
  <tbody>
    
    
        <?php
  
  //-------sending customer information-----------//
  
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            $TRI_VALUE=time();
            $Order_Id= time()*10;
            $ordertotal=$_SESSION['Total'];
             //$bussinessdate = date('Y-m-d H:i:s');
            foreach($cartItems as $item){
            	
$_SESSION['Prod_Nm']=$item["PROD_NM"];
$_Session['Price']=$item["price"];
$_Session['Qty']=$item["qty"];
$_Session['Subtotal']=$item["subtotal"];
$_SESSION['Prod_Id']=$item["PROD_ID"];
$stmt=db2_prepare($conn,"INSERT INTO RETAIL_STR_BILL_DETAILS_INTERNET(TRI_ID,ORDERID,STORE_ID,MOBILE_NO,SHIPING_ADDR,BILL_ADDR,PRODUCT_ID,PROD_NM,MRP,QTY)VALUES('$TRI_VALUE','$Order_Id','1462908501','$Mobile_No','$ShippingAddress','$BillingAddress','{$_SESSION['Prod_Id']}','{$_SESSION['Prod_Nm']}','{$_Session['Price']}','{$_Session['Qty']}')");
//*End Of query*// 
if (!db2_execute($stmt)) {
    printf("%s\n", db2_stmt_error($stmt));
    $err = db2_stmt_errormsg();
}
?>


<td><?php echo $Order_Id; ?></td>
            <td><?php echo $item["PROD_NM"]; ?></td>
            <td><?php echo 'Rs'.$item["price"].''; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo 'Rs'.$item["subtotal"].''; ?></td>
   </tr>
        <?php }
        $result=db2_prepare($conn,"INSERT INTO RETAIL_STR_BILL_MASTER_INTERNET(TRI_ID,STORE_ID,NAME,MOBILE_NO,TOTAL,SHIPING_ADDR,BILL_ADDR) VALUES($TRI_VALUE,'1472222821','$name','$Mobile_No','$ordertotal', '$ShippingAddress','$BillingAddress')");
if (!db2_execute($result)) {
   printf("%s\n", db2_stmt_error($result));
    $err = db2_stmt_errormsg();
    
}
        
        }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
      
   
    
    <tfoot>
        <tr>
      <th colspan="4">Grand Total</th>
      <?php if($cart->total_items() > 0){ ?>
            <td><strong> <?php echo 'Rs'.$cart->total().''; ?></strong></td>
            <?php } ?>
    </tr>

    </tfoot>
   </table>
   
  </div>
</div>

<h2>Fullscreen Overlay Nav Example</h2>
<p>Click on the element below to open the fullscreen overlay navigation menu.</p>
<p>In this example, the navigation menu will slide downwards from the top:</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
     

<form name="form1" onsubmit="return validate()" method="POST" action="">
    	
<div align="center">
      

 
 <table>   

            <tr><td>Order Total:</td><td><input type="text" readonly="readonly" value="<?php session_start();
echo $_SESSION['Total'];?>" </td></tr><td>&nbsp;</td>
             
<tr><td>Phone:</td><td><input type="text" name="mobile_no" required maxlength="10" onkeypress="javascript:return isNumber(event)" </td></tr><td>&nbsp;</td>
            <tr><td>Your Name:</td><td><input type="text" name="name"  /></td></tr><td>&nbsp;</td>
            <tr><td>Email:</td><td><input type="text" name="e_mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  </td></tr><td>&nbsp;</td>
            <tr><td>Shipping Address:</td><td><textarea name="shippingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            <tr><td>CheckBox:</td><td><input type="checkbox" name="billingtoo" onclick="FillBilling(this.form)">
              Check this box if Billing Address and Shipping are the same</td></tr>
                 
             <tr><td>Billing Address:</td><td><textarea name= "billingaddress" cols="20" rows="5" ... ></textarea></td></tr>
            
            
            <tr><td>&nbsp;</td><td><input type="submit"class ="myButton" value="Confirm Order"  /></td></tr>
        </table>
	</div>
</div>
</form>
	
	<!-- progress bar -->
							
									
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

	<!-- Section: boxes -->
    <
	

</div>
</body>
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
<script type="text/javascript" src="progressbar/jquery.min.js"></script>
	<script type="text/javascript" src="progressbar/jquery.form.min.js"></script>
	
	<!-- main script -->
	<script type="text/javascript" src="progressbar/script.js"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
      
        var e = document.getElementById(id);
    
        e.style.display = "block";
     
}
//-->
</script>

<?php
require("footer.php");
?>
</html>
