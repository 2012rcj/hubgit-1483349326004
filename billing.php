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

$Store_Id='1462908501';
$image = $_FILES["file"]["name"];
$image1=$_FILES["file1"]["name"];
 $priscription_VALUE=time();
$stmt=db2_prepare($conn,"INSERT INTO retail_priscription(priscription,image,Store_Id) VALUES('$priscription_VALUE','$image','$Store_Id')");
//*End Of query*// 
if (!db2_execute($stmt)) {
    printf("%s\n", db2_stmt_error($stmt));
    $err = db2_stmt_errormsg();
}
$stmt1=db2_prepare($conn,"INSERT INTO retail_priscription(priscription,image,Store_Id) VALUES('$priscription_VALUE','$image1','$Store_Id')");
//*End Of query*// 
if (!db2_execute($stmt1)) {
    printf("%s\n", db2_stmt_error($stmt1));
    $err = db2_stmt_errormsg();
}
?>

"<img src="images/<?php $image =  $_FILES["file"]["name"]; 
echo $image;?>" alt="Image path Invalid" height="65%" width="65%">";
 
										
										

<?php
}
}

}
