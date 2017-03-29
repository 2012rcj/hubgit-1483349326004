<html>
	<body>
<button class="myclass" cotent-url="delete.php">Delete</button>
<button class="myclass" cotent-url="save.php">Save</button>
<div class="popup"><iframe src=""></iframe></div>

<script type="text/javascript">
$('.myclass').click(function(){
    $('.popup iframe').attr('src', $(this).attr('content-url'));
})
</script>
		</body>
	</html>
