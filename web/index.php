<?php
	$servidor = "investigacion2asn.mysql.database.azure.com";
	$usuario = "sysadmin@investigacion2asn";
	$clave = "Admin123";
	$baseDatos = "investigacionasn2";

	$enlace = mysql_connect($servidor, $usuario, $clave, $baseDatos);

		if (!$enlace) {
		echo "Error al conectar al servidor, FELIZ CUARENTENA";
	}

?>




<!DOCTYPE HTML>
<html>
<head>
<title>TCC RACING</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Racing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.8.3.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="header-top">
				<div class="logo">
					<a href="index.html">TCC RACING</a>
				</div>
				<div class="top-menu">
					<span class="menu"><img src="images/nav.png" alt=""/> </span>
						<ul>
							<li><a href="index.html" class="active">home</a></li>
							<li><a href="about.html">about</a></li>
							<li><a href="services.html">services</a></li>
						</ul>
				</div>
				<div class="search">
					<div class="b-search">
						<form>
							<input type="text" value="Search here" onfocus="this.value = ''" onblur="if (this.value == '') {this.value = 'Search here';}">
							<input type="submit" value="">
						</form>
					</div>
				</div>	
				<!--script-nav-->
						 <script>
						 $("span.menu").click(function(){
						 $(".top-menu ul").slideToggle("slow" , function(){
						 });
						 });
						 </script>
					<div class="clearfix"></div>
				</div>
				</div>
					 <!-- Slider-starts-Here -->
	 <script src="js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				
					<div class="slid banner1">
						  <div class="caption">
								<h3>The Car of Your Dreams is Here!</h3>
								<p></p>
								
						  </div>
					</div>
				
				
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>The Car of Your Dreams is Here!</h3>
								
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>The Car of Your Dreams is Here!</h3>
							
						</div>
					</div>
				
			  </ul>
		 </div>
	 </div>
	 </div>
	<!--about-->
		<div class="content">
			<div class="incredible">
				<div class="container">
					<h3>Incredible Cars</h3>
						<div class="incredible-grids">
							<div class="col-md-3 incredible-grid">
								<img src="images/p1.jpg" class="img-responsive" alt="/">
								<h4>Calidad</h4>
								<p>La calidad de nuestros vehiculos e.</p>
							</div>
							<div class="col-md-3 incredible-grid">
								<img src="images/p2.jpg" class="img-responsive" alt="/">
								<h4>Precio</h4>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.</p>
							</div>
							<div class="col-md-3 incredible-grid">
								<img src="images/p3.jpg" class="img-responsive" alt="/">
								<h4>Seguro</h4>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.</p>
							</div>
							<div class="col-md-3 incredible-grid">
								<img src="images/p4.jpg" class="img-responsive" alt="/">
								<h4>Mantenimiento</h4>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.</p>
							</div>
							<div class="clearfix"></div>
						</div>
				</div>
			</div>
		<!--about-->
				<!--training-->
					<div class="training">
						<div class="container">
							<div class="training-grids">
							<div class="col-md-4 training-grid">
								<h3>training</h3>
								<img src="images/p5.jpg" class="img-responsive" alt="/">
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="col-md-4 training-grid">
								<h3>extreme</h3>
								<img src="images/p6.jpg" class="img-responsive" alt="/">
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="col-md-4 training-grid">
								<h3>performance</h3>
								<img src="images/p7.jpg" class="img-responsive" alt="/">
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="clearfix"></div>
							</div>
						</div>
					</div>
				<!--training-->
				<!--models-->
					<div class="models">
						<div class="container">
							<h3>models</h3>
							<div class="clients">
								<ul id="flexiselDemo3">
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m1.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m4.jpg" class="img-responsive" alt=""/></li>
									<li><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
								</ul>
									<script type="text/javascript">
								$(window).load(function() {
									
								  $("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 2
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--models-->
			<!--event-->
					<div class="event">
						<div class="container">
							<div class="event-grids">
							<div class="col-md-4 event-grid">
								<h3>about</h3>
								<a class="popup-with-zoom-anim" href="#small-dialog"><img src="images/v1.jpg" title="Designer_girl" class="img-responsive" alt=""/></a>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="col-md-4 event-grid">
								<h3>event</h3>
								<a class="popup-with-zoom-anim" href="#small-dialog"><img src="images/v2.jpg" title="Designer_girl" class="img-responsive" alt=""/></a>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="col-md-4 event-grid">
								<h3>membership</h3>
								<a class="popup-with-zoom-anim" href="#small-dialog"><img src="images/v3.jpg" title="Designer_girl" class="img-responsive" alt=""/></a>
								<p>Phasellus porta. Fusce suscipit variusmciis natoqueust magnis dis partur ientdiculus muslladui.Phasellus porta Fusce suscipit.</p>
							</div>
							<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!---pop-up-box---->  
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<iframe src="https://player.vimeo.com/video/24244153"></iframe> 
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>								  
			<!----//fea-video---->
			<!--specials-->
				<div class="specials-section">
					<div class="container">
						<div class="specials-grids">
							<div class="col-md-3 specials1">
								<h3>categories</h3>
								<ul>
									<li><a href="#">Lorem ipsum dolor</a></li>
									<li><a href="#">Consectetur adipiscing</a></li>
									<li><a href="#">Integer molestie lorem</a></li>
									<li><a href="#">Facilisis in pretium nisl</a></li>
									<li><a href="#">Pacilisis in pretium nisl</a></li>
								</ul>
							</div>
							<div class="col-md-3 specials1">
								<h3>archives</h3>
								<ul>
									<li><a href="#">September, 2013</a></li>
									<li><a href="#">August, 2013</a></li>
									<li><a href="#">July, 2013</a></li>
									<li><a href="#">June, 2013</a></li>
									<li><a href="#">May, 2013</a></li>
								</ul>
							</div>
							<div class="col-md-3 specials1">
								<h3>contact</h3>
								<address>
									<p>The Company Name Inc.</p>
									<p>Glasgow,Le 99 Pr 45.</p>
									<p>Telephone: +1 800 603 6035</p>
									<p>FAX: +1 800 889 9898</p>
									<p>E-mail: <a href="mailto:example@mail.com">example@mail.com</a></p>
								</address>
							</div>
							<div class="col-md-3 specials1">
								<h3>social</h3>
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">google</a></li>
									<li><a href="#">Vimeo</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
				<!--footer-->
					<div class="footer-section">
						<div class="container">
							<div class="footer-top">
								<p>Copyright &copy; 2015 <span>Car Racing.</span> All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
							</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
</body>
</html>
