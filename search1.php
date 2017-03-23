<html>
<head>
	
	<script type='text/javascript' src='js/jquery-1.4.2.min.js'></script>


</head>

<style>
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 220px;
}
#sidebar-wrapper {
  z-index: 1000;
  left: 220px;
  width: 0;
  height: 100%;
  margin-left: -220px;
  overflow-y: auto;
  overflow-x: hidden;
  background: #fff;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}
#wrapper.toggled #sidebar-wrapper {
  width: 220px;
}
#page-content-wrapper {
  width: 100%;
}
#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -220px;
}
 .sidebar-nav {
  position: absolute;
  top: 0;
  width: 220px;
  margin: 0;
  padding: 0;
  list-style: none;
}
.sidebar-nav li {
  position: relative;
  line-height: 20px;
  display: inline-block;
  width: 100%;
}
.sidebar-nav li:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  height: 100%;
  width: 3px;
  background-color: #fff;
  -webkit-transition: width .2s ease-in;
  -moz-transition: width .2s ease-in;
  -ms-transition: width .2s ease-in;
  transition: width .2s ease-in;
}
.sidebar-nav li:first-child a {
  color: #999;
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(2):before {
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(3):before {
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(4):before {
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(5):before {
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(7):before {
  background-color: #52b6ec;
}
.sidebar-nav li:nth-child(8):before {
  background-color: #52b6ec;
}

.sidebar-nav li:nth-child(9):before {
  background-color: #52b6ec;
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
  width: 100%;
  -webkit-transition: width .2s ease-in;
  -moz-transition: width .2s ease-in;
  -ms-transition: width .2s ease-in;
  transition: width .2s ease-in;

}
.sidebar-nav li a {
  display: block;
  color: #999;
  text-decoration: none;
  padding: 10px 15px 10px 30px;
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus {
  color: #fff;
  text-decoration: none;
  background-color: transparent;
}
.sidebar-nav > .sidebar-brand {
  height: 65px;
  font-size: 20px;
  line-height: 44px;
}

.sidebar-nav .dropdown-menu {
  position: relative;
  width: 100%;
  padding: 0;
  margin: 0;
  border-radius: 0;
  border: none;
  background-color: #f1f1f1;
  box-shadow: none;
}
.hamburger {
  position: fixed;
  top: 100px;
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}

.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}

.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 2px;
  width: 100%;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}

.hamburger.is-closed .hamb-top {
  top: 5px;
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}

.hamburger.is-closed .hamb-bottom {
  bottom: 5px;
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}

.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;
}

.hamburger.is-open .hamb-top {
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
}

.hamburger.is-open .hamb-middle {
  display: none;
}

.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73, 1, .28, .08);
}

.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px, 0, 0);
  -webkit-transition: all .35s ease-in-out;
}
.overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(250, 250, 250, .8);
  z-index: 1;
}
</style>

<script>
$('.navbar').on('mouseleave', function (e) {
   trigger.click(); // simulate the action you now do to close the menu
})
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
      isClosed = false;

  trigger.click(function () {
    hamburger_cross();
  });
  $('.navbar').on('mouseleave', function (e) {
    trigger.click();
  })

  function hamburger_cross() {

    if (isClosed == true) {
      overlay.hide();
      trigger.removeClass('is-open');
      trigger.addClass('is-closed');
      isClosed = false;
    } else {
      overlay.show();
      trigger.removeClass('is-closed');
      trigger.addClass('is-open');
      isClosed = true;
    }
  }

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<body>
<center>
<br>

<div style='display:none;'>
	<img src="images/loader.gif" />
</div>

<form action="" name = "form">	
	<input type="text" name="name" id="fn" Placeholder="Search Something..." style="width:300px; padding:8px;"/>
	<input type="submit" class="hamburger is-closed" data-toggle="offcanvas" value="Search" style="padding:8px;"/>
</form>
<br>
<div id="wrapper">
    <!-- Sidebar -->
    <nav class="navbar navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav navbar-nav sidebar-nav">
            <div class="gap"><br><br><br></div>
<div id = "s-results">
	<!-- Search results here! -->
</div>
    </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>
    </div>
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
