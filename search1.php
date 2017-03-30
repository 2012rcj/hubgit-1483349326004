<?php

include 'db_const.php';

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

        //get rows query
        $stmt = "SELECT * FROM retail_priscription WHERE priscription='1490872071'";
       $result = db2_prepare($conn, $stmt);
       db2_execute($result);
           
        if(!empty($stmt)){
        
            while($row = db2_fetch_array($result)){
          $temp=$row['2'];

foreach($temp as $image)
{
$images="images/".$image;


 echo "<img src='$images' height='100' width='200' />";

}
  }}

       
 
										
										

}}
}
?>
