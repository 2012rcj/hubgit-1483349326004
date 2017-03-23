<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>


</head>
<script>


</script>
<body>
<center>
<br>

<div style='display:none;'>
	<img src="images/loader.gif" />
</div>

<form action="" name = "form">	
	<input type="text" name="name" id="fn" Placeholder="Search Something..." style="width:300px; padding:8px;"/>
	<input type="submit" value="Search" style="padding:8px;"/>
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

</body>
</html>
