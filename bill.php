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
            	
$_SESSION['Prod_Nm']= $item["PROD_NM"];
$_Session['Price']=$item["price"];
$_Session['Qty']=$item["qty"];
$_Session['Subtotal']=$item["subtotal"];
$_Session['Prod_Id']=$item["PROD_ID"]
?>
        
       <tr class="table_fields_top">
            <td ><?php echo $item["PROD_NM"]; ?></td>
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
            <td></td>
            <?php if($cart->total_items() > 0){
            	$_SESSION['Total']=$cart->total();
            	?>
		<td></td>
		<td><strong>Total<strong></td>
            <td class="text-center"><strong> <?php echo 'Rs'.$cart->total().''; ?></strong></td>
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



<form name="form1" onsubmit="return validate()" method="POST" action="paybycash.php">
    	
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

