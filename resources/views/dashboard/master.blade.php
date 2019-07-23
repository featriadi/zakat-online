<!DOCTYPE HTML>
<html>
	<head>
		<title>Zakat Online | Solusi Zakat Modern</title>
		<link rel="stylesheet" href="{{asset('homepage/css/style.css')}}" type="text/css" />
		<script src="{{asset('homepage/js/jquery.min.js')}}"></script>
		<script src="{{asset('homepage/js/elsyifa.js')}}"></script>
		<script src="{{asset('homepage/js/main.js')}}"></script>
	</head>

	<body>
		<!-- Header -->
		<header id="header">
				<div class="inner">
					<a href="{{url('/')}}" class="logo">Zakat Online</a>
					<nav id="nav">
						<a href="{{url('/tentangzakat')}}">Tentang Zakat</a>
						<a href="{{url('/kalkulatorzakat')}}">Kalkulator Zakat</a>

						@guest    
                        	<a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                            @endif
                        @else
                        	@if(Auth::user()->role == 'member')
                        		<a href="{{url('/pembayaran')}}">Bayar Zakat</a>
                        	@else
                        		<a href="{{url('/daftarpembayaran')}}">Kelola Zakat</a>
                        	@endif
                            <!--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{url('/profile')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span></a> -->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		
		@yield('content')
		
		<!-- Footer -->
    	<section id="footer">
			<div class="inner">
				<div class="copyright">
					&copy; Copyright: <a href="{{url('/dashboard')}}">Zakat Online</a>. Images <a href="https://unsplash.com/">Unsplash</a>
				</div>
			</div>
		</section>
	</body>
</html>