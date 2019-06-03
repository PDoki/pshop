<?php
	// Define the root folder and base URL for the application
	function baseURL(){
		return sprintf(
			"%s://%s%s",
			isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			$_SERVER['SERVER_NAME'],
			dirname($_SERVER['REQUEST_URI'])
		);
	}

	define('BASE_URL', baseURL());
	define('KY_ROOT', dirname(__FILE__));
	$page = isset($_GET['page']) ? $_GET['page'] : 'home';
	
	$pages = array(
		'home' => 'Home',
		'category' => 'Category - Grid/List',
		'detail' => 'Detail',
		'cart' => 'Shopping Cart',
		'checkout' => 'Checkout',
		'contact' => 'Contact Us',
		'404' => '404'
		);
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">

		<title>KYBully</title>

		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Customizable CSS -->
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/green.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/pink.css" rel="alternate stylesheet" title="Pink color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/light-green.css" rel="alternate stylesheet" title="Light Green color">

		<!-- Demo Purpose Only. Should be removed in production : END -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/elegant-fonts.css">

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
<body>


	<div class="wrapper">
		<?php require KY_ROOT.'/parts/section/header.php';?>

		<?php require_once KY_ROOT.'/pages/'.$page.'.php'; ?>

		<?php require KY_ROOT.'/parts/section/footer.php';?>  
	</div><!-- /.wrapper -->

	<!-- For demo purposes – can be removed on production -->
	
	<div class="config open">
		<div class="config-options">
			<h4>Pages</h4>
			<ul class="list-unstyled animate-dropdown">
				<li class="dropdown">
					<button class="dropdown-toggle btn btn-primary btn-lg btn-block" data-toggle="dropdown">View Pages</button>
					<ul class="dropdown-menu">
						<?php foreach ( $pages as $key => $packagePage ) : ?>
						<li><a href="index.php?page=<?php echo $key;?>&amp;style=<?php echo $_GET['style'];?>"><?php echo $packagePage;?></a></li>
						<?php endforeach; ?>
					</ul>	
				</li>
			</ul>
			<h4>Colors</h4>
			<ul class="list-unstyled">
				<li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor pink-text" href="#" title="Pink color">Pink</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor light-green-text" href="#" title="Light Green color">Light Green</a></li>
			</ul>
		</div>
		<a class="show-theme-options" href="#"><span data-icon="&#xe037;"></span></a>
	</div>
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/bootstrap-slider.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/flatui-controls.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

</body>
</html>