<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>


</head>
<style>
	#sidebar {
  width: 210px;
  height: 100%;
  position: fixed;
  background: #2a3542;
 }

 #main-content {
  margin-left: 210px;
    position :relative;
 }
.navbar{
    cursor:pointer;
    color:red;
}
	</style>
	
<body>
<center>
<br>
 <div class="navbar">Search</div>
 <div id="sidebar">
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
	$(function(){
    $('.navbar').on('click', function(){
        if( $('#sidebar').is(':visible') ) {
            $('#sidebar').animate({ 'width': '0px' }, 'slow', function(){
                $('#sidebar').hide();
            });
            $('#main-content').animate({ 'margin-left': '0px' }, 'slow');
        }
        else {
            $('#sidebar').show();
            $('#sidebar').animate({ 'width': '210px' }, 'slow');
            $('#main-content').animate({ 'margin-left': '210px' }, 'slow');
        }
    });
});
	 $('form').bind('submit',function(e){
         e.preventDefault(); /* This will stop the submit of form */
        showValues(); 
        return false; 
    });
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
</div>
</center>
</body>
</html>
