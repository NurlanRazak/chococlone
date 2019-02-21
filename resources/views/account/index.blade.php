<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>user profile</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('/img/background1.jpg');">
			<div class="overlay"></div>
		</div>
<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Добро пожаловать, {{\Auth::user()->email}}</h1>
							<p class="white-text">Веб-сайт был разработан студентом is-1608k Разак Нурлан. Для web-technology
							</p>
							@if(\Auth::user()->isAdmin == 1)
							<a href="{{ route('admin') }}"><button class="white-btn">В админку</button></a><br>
								@endif
							<a href="{{route('main')}}"><button class="main-btn">продолжить</button></a>
							<a href="{{route('logout')}}"><button class="white-btn">Выйти</button></a>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
</header>

</html>

