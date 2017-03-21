<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo of How to show hide or open close fixed sidebar on click in Jquery</title>
<meta content="This tutorial will explain about to create a fixed sidebar on click event in jquery. When user click on that button it will show the pop up and there is a close icon to close that sidebar." name="description" />
<meta content="fixed sidebar in jquery, show hide sidebar on click, create sidebar in jquery, open close sidebar in jquery,, fixed sidebar, sidebar toggle, toggle in jquery" name="keywords" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>

.floatR{ float:right;}
.recentItem{ position:fixed; left:-300px;  background:#ccc; top:0; z-index:999999; width:300px; padding:10px; overflow:auto; height:100%;}
.recentItemTxt{ padding:25px 0 0 0px; font-size:1.5em; font-weight:300;}
.ctntItem{ background:#FFF; padding:10px; border-bottom:1px solid #aaa;}
.ctntItem img{ margin-right:8px; display:inline; float:left;}
.ctntItem h3{ font-size:0.95em; font-weight: normal; padding:0 0 7px 0;}
.ctntItem h3 a{ text-decoration:none;}
.propDfn{ display:inline; font-size:0.785em; line-height:19px;}
.cntLoc{ vertical-align:middle; margin:2px 5px 0 0;}
.recentItem a > i{ color:#000; font-size:30px;}
.recentItem a:hover > i{ color:#a54686;}
.ctntItem:hover{ box-shadow:0 0 10px #999;}

.btn {
    font-family: "Open Sans";
}
.btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
}
.btn-bricky {
    background-color: #c83a2a;
    border-color: #b33426;
    color: #ffffff;
	margin:30px;
}
.centerItem{margin:100px 0 0 250px;}
</style>

<script> 
$(document).ready(function(){
$("#recentItem").click(function(){
$(".recentItem").animate({
left: '0'	  
});
$("body").css('overflow','hidden');
});

$("#closX").click(function(){
$(".recentItem").animate({
left: '-300px'			
}); 
$("body").css('overflow','auto');});
});

</script>
</head>



<body>
<!--===========================  -->
<!-- For More Info Visit : http://www.discussdesk.com/show-hide-fixed-sidebar-on-click-in-jquery.htm-->
<!-- ============================ -->

<form action="" target="ctntItem cf margint10"  method="post">  
Search: <input type="text" name="term" /><br />  
<input  type="submit" value="Submit" />  
</form>


<div class="recentItem"> <a href="#" id="closX" class="cf"><i class="fa fa-times floatR">x</i></a>
            
            <div class="ctntItem cf margint10">
            <?php
include 'db_const.php';
if (!empty($_REQUEST['term'])) {

$term = $_REQUEST['term'];     


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
            </div>
            
			
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo of How to show hide or open close fixed sidebar on click in Jquery</title>
<meta content="This tutorial will explain about to create a fixed sidebar on click event in jquery. When user click on that button it will show the pop up and there is a close icon to close that sidebar." name="description" />
<meta content="fixed sidebar in jquery, show hide sidebar on click, create sidebar in jquery, open close sidebar in jquery,, fixed sidebar, sidebar toggle, toggle in jquery" name="keywords" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style>

.floatR{ float:right;}
.recentItem{ position:fixed; left:-300px;  background:#ccc; top:0; z-index:999999; width:300px; padding:10px; overflow:auto; height:100%;}
.recentItemTxt{ padding:25px 0 0 0px; font-size:1.5em; font-weight:300;}
.ctntItem{ background:#FFF; padding:10px; border-bottom:1px solid #aaa;}
.ctntItem img{ margin-right:8px; display:inline; float:left;}
.ctntItem h3{ font-size:0.95em; font-weight: normal; padding:0 0 7px 0;}
.ctntItem h3 a{ text-decoration:none;}
.propDfn{ display:inline; font-size:0.785em; line-height:19px;}
.cntLoc{ vertical-align:middle; margin:2px 5px 0 0;}
.recentItem a > i{ color:#000; font-size:30px;}
.recentItem a:hover > i{ color:#a54686;}
.ctntItem:hover{ box-shadow:0 0 10px #999;}

.btn {
    font-family: "Open Sans";
}
.btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 18px;
    line-height: 1.33;
    padding: 10px 16px;
}
.btn-bricky {
    background-color: #c83a2a;
    border-color: #b33426;
    color: #ffffff;
	margin:30px;
}
.centerItem{margin:100px 0 0 250px;}
</style>

<script> 
$(document).ready(function(){
$("#recentItem").click(function(){
$(".recentItem").animate({
left: '0'	  
});
$("body").css('overflow','hidden');
});

$("#closX").click(function(){
$(".recentItem").animate({
left: '-300px'			
}); 
$("body").css('overflow','auto');});
});

</script>
</head>



<body>
<!--===========================  -->
<!-- For More Info Visit : http://www.discussdesk.com/show-hide-fixed-sidebar-on-click-in-jquery.htm-->
<!-- ============================ -->

<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input id="recentItem"  class="btn btn-bricky btn-lg" type="submit" value="Submit" />  
</form>


<div class="recentItem"> <a href="#" id="closX" class="cf"><i class="fa fa-times floatR">x</i></a>
            
            <div class="ctntItem cf margint10">
            <?php
include 'db_const.php';
if (!empty($_REQUEST['term'])) {

$term = $_REQUEST['term'];     


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
            </div>
            
			
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38304687-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</body>
</html>
