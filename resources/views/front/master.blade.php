<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--
		Basic
	-->
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<title>Cho Zin Phyo - CV / Resume</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="Cho Zin Phyo CV Resume" />
	<meta name="keywords" content="resposnive, resume, personal, card, cv, cards, portfolio" />
	<meta name="author" content="chozinphyo" />
	
	<!--
		Load Fonts
	-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">
	
	<!--
		Load CSS
	-->
	<link rel="stylesheet" href="{{ asset('front/css/basic.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/layout.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/blogs.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/ionicons.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/animate.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}" />
	<!--
		Background Gradient
	-->
	<link rel="stylesheet" href="{{ asset('front/css/gradient.css') }}" />
	<!--
		Template Colors
	-->
    <link rel="stylesheet" href="{{ asset('front/css/new-skin/new-skin.css') }}" />
	<link rel="stylesheet" href="{{ asset('front/css/demos/demo-5-colors.css') }}" />
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	
</head>

<body>

    <div class="page new-skin">
        <!-- preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>
			</div>
		</div>
        <!-- background -->
		<div class="background" style="background: #d8dbe2"></div>
        <!--
			Container
		-->
		<div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
            @include('front.components.header')
            @yield('content')
        </div>
    </div>

	<!--
		jQuery Scripts
	-->
	<script src="{{ asset('front/js/jquery.min.js') }}"></script>
	<script src="{{ asset('front/js/jquery.validate.js') }}"></script>
	<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
	<script src="{{ asset('front/js/imagesloaded.pkgd.js') }}"></script>
	<script src="{{ asset('front/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset('front/js/jquery.slimscroll.js') }}"></script>
	<script src="{{ asset('front/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('front/js/typed.js') }}"></script>
	<script src="https://use.fontawesome.com/8da76d029b.js"></script>
	<!--
		Main Scripts
	-->
	<script src="{{ asset('front/js/scripts.js') }}"></script>
	
</body>
</html>