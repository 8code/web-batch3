<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="/frontend/img/favicon.png" type="image/png">
	<title>Satner Portfolio</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="/frontend/css/bootstrap.css">
	<link rel="stylesheet" href="/frontend/vendors/linericon/style.css">
	<link rel="stylesheet" href="/frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/frontend/css/magnific-popup.css">
	<link rel="stylesheet" href="/frontend/vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="/frontend/css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/frontend/index.html"><img src="/frontend/img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
							<li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="/portfolio">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
						
							
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

    @yield('content')
    
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="/frontend/js/jquery-3.2.1.min.js"></script>
	<script src="/frontend/js/popper.js"></script>
	<script src="/frontend/js/bootstrap.min.js"></script>
	<script src="/frontend/js/stellar.js"></script>
	<script src="/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="/frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="/frontend/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="/frontend/vendors/isotope/isotope-min.js"></script>
	<script src="/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="/frontend/js/jquery.ajaxchimp.min.js"></script>
	<script src="/frontend/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="/frontend/js/gmaps.min.js"></script>
	<script src="/frontend/js/theme.js"></script>
	
	@yield("js-after")
</body>

</html>