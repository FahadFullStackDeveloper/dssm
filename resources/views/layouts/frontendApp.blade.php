<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DSSM LMS') }}</title>

    <!-- Scripts -->

	<script src="{{ asset('/frontend/js/bundle.js')}}"></script>
	<script src="{{ asset('/frontend/js/scripts.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/frontend/css/dashlite.css')}}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/theme.css')}}" id="skin-default" rel="stylesheet">
</head>
<body>
    <div class="nk-body bg-white npc-general pg-auth">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}


		<div class="nk-app-root">
				<!-- main @s -->
			<div class="nk-main ">
				<!-- wrap @s -->
				<div class="nk-wrap nk-wrap-nosidebar">
					<!-- content @s -->
					<div class="nk-content ">
						<div class="nk-block nk-block-middle nk-auth-body wide-xs">
							
							<div class="brand-logo pb-4 text-center">
								<a href="/" class="logo-link">
									<strong>Dssm Lms</strong>
								</a>
							</div>

							@yield('content')

						</div>

						<div class="nk-footer nk-auth-footer-full">
							<div class="container wide-lg">
								<div class="row g-3">
									<div class="col-lg-6 order-lg-last">
										<ul class="nav nav-sm justify-content-center justify-content-lg-end">
											<li class="nav-item">
												<a class="nav-link" href="#">Terms & Condition</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Privacy Policy</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#">Help</a>
											</li>
										</ul>
									</div>
									<div class="col-lg-6">
										<div class="nk-block-content text-center text-lg-left">
											<p class="text-soft">&copy; 2022 Dssm Lms. All Rights Reserved.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- wrap @e -->
				</div>
				<!-- content @e -->
			</div>
			<!-- main @e -->
		</div>


        @if (session()->has('msg'))	
            <script>
                NioApp.Toast('{{ session()->get('msg') }}', 'info', {
                    position: 'top-right',
                    timeOut: 5000
                });
            </script>	
        @endif
    </div>
</body>
</html>
