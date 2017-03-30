<?php
include 'db_const.php';
$stmt = "SELECT * FROM retail_priscription WHERE priscription='1490872071';
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
 $row = db2_fetch_array($result);

     
$images=$row['2'];
$remove_last_comma=substr($images,0,-1);
$temp = explode(',',$remove_last_comma);
for($i=0;$i<count($temp);$i++)
{   
	echo '<img src="images/'.trim($temp[$i]).'" height="50" width="50">';
	echo "<br />";
    echo "<br />";  
}
?>
