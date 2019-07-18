<!DOCTYPE HTML>
<html>
	<head>
		<title>Zakat Online - Solusi Zakat Modern</title>
		<link rel="stylesheet" href="{{asset('homepage/css/style.css')}}" type="text/css" />
		<script src="{{asset('homepage/js/jquery.min.js')}}"></script>
		<script src="{{asset('homepage/js/elsyifa.js')}}"></script>
		<script src="{{asset('homepage/js/main.js')}}"></script>
	</head>

	<body>
		<!-- Header -->
		<header id="header">
				<div class="inner">
					<a href="{{url('/dashboard')}}" class="logo">Zakat Online</a>
					<nav id="nav">
						<a href="{{url('/tentangzakat')}}">Tentang Zakat</a>
						<a href="{{url('/kalkulatoremas')}}">Kalkulator Zakat</a>
						<a href="{{url('/kontak')}}">Kontak</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		@yield('content')
		<!-- Footer -->
    	<section id="footer">
			<div class="inner">
				<div class="copyright">
					&copy; Copyright: <a href="https://templated.co/">Zakat Online</a>. Images <a href="https://unsplash.com/">Unsplash</a>
				</div>
			</div>
		</section>
	</body>
</html>