<?php
include('db_const.php';);
isset( $_REQUEST['term'] ) ? $name=$_REQUEST['term'] : $term='';



if( empty( $term )){
	echo '<script> alert("Please search something!")</script>';
}else{
	$stmt = "SELECT * FROM RETAIL_STORE_PROD WHERE STORE_ID='1462908501'and Prod_Nm LIKE '%".$term."%'";
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
           
        if(!empty($stmt)){
        
            while($row = db2_fetch_assoc($result)){

?>
<td><b><?php echo $row['PROD_NM']?></b><br /><br />
            		
                    Price:<big style="color:green">
                    	Rs<?php echo $row['MRP']?></big><br /><br />
                                  
               
 <a class="btnLink" href="viewCart.php?action=addToCart&PROD_ID=<?php echo $row["PROD_ID"]; ?>" onClick="return popup(this, 'notes')">Add to cart</a></in>
                  </td></td>
 <?php
}  
}
}
?>
