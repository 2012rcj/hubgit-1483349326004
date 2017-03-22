<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>
<script>

$('#menu-button').click(function(){
     $('#hide-menu').toggleClass('show-menu');
});
</script>
<style>
#s-results {
    position: fixed;

    top: 0px;
    height: 10px;
    left: 0px;
    right: 0px;

    background-color: yellow;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-duration: 0.3s;
}

#s-results:hover {
    top: 50px;
    background-color: cyan;
}

#s-results_inner {
    position: fixed;

    top: -50px;
    height: 50px;
    left: 0px;
    right: 0px;

    background-color: red;
    -webkit-transition-duration: 0.3s;
    -moz-transition-duration: 0.3s;
    -o-transition-duration: 0.3s;
    transition-duration: 0.3s;
}

#s-results:hover #s-results_inner {
    top: 0px;
    left: 0px;
    right: 0px;
    background-color: magenta;
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
