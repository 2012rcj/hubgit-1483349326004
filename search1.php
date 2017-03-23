<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>

<style>
body {
    font-family: "Lato", sans-serif;
}

.s-results {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.s-results a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.s-results a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.s-results .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .s-results {padding-top: 15px;}
  .s-results a {font-size: 18px;}
}
</style>
</head>
<body>
<center>
<br>

<div style='display:none;'>
	<img src="images/loader.gif" />
</div>

<form action="" name = "form">	
	<input type="text" name="name" id="fn" Placeholder="Search Something..." style="width:300px; padding:8px;"/>
	<input type="submit" value="Search" id="menu-button"style="padding:8px;"/>
</form>
<br>

<div id = "s-results">
	<!-- Search results here! -->
</div>

<script type = "text/javascript">
$(document).ready(function(){
	$('#s-results').load('search.php').show();
	
	
	$('#search-btn').click(function(){
		showValues();
	});
	
	$(function() {
		$('form').bind('submit',function(){
			showValues(); 
			return false; 
		});
	});
		
	function showValues() {
		$('#s-results').html('<img src="images/loader.gif" />');  
		
		$.post('search.php', { name: form.name.value },
		
		function(result){
			$('#s-results').html(result).show();
		});
	}
		
});
</script>

</center>
</nav>
</body>
</html>
