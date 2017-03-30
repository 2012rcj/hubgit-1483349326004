<?php

include 'db_const.php';



        //get rows query
        $stmt = "SELECT * FROM retail_priscription WHERE priscription='1490872071'";
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
           
        if(!empty($stmt)){
        
            while($row = db2_fetch_array($result)){
          $temp=$row['2'];
echo $temp;
foreach($temp as $image)
{
$ima="images/".$image;


 echo "<img src='$ima' height='100' width='200' />";

}
  }}

       
 
										
										



?>
