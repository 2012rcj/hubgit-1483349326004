


<!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
include 'db_const.php';
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     


$stmt = "SELECT * FROM RETAIL_STORE_PROD WHERE STORE_ID='1462908501',Prod_Nm LIKE '%".$term."%'";
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
    </body>
</html>    
