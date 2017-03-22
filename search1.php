<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>

<style>
body
    {
       overflow:hidden;
    }

.menu-button
    {
        border:1px solid #000;
        color:fff;
        display:inline-block;
        cursor:pointer;
    }

.hide-menu
{
    background-color:#336ca6;
    position: absolute;
    top:0;
    right:0;
    z-index: 1;
    width: 300px;
    height: 100%;
    -webkit-transform: translate3d(300px,0,0);
    -moz-transform: translate3d(300px,0,0);
    -o-transform: translate3d(300px,0,0);
    -ms-transform: translate3d(300px,0,0);
    transform: translate3d(300px,0,0);      
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
}

.show-menu      
{
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
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
<nav id="hide-menu" class="hide-menu">
	<!-- Search results here! -->
</nav>
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
