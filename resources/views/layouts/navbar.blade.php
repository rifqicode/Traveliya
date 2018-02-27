
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveliya</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset ('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{ asset('css/superfish.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{ asset('css/cs-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/cs-skin-border.css') }}">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" type="text/css"/>

	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('css/select2.css') }}" type="text/css"/>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>

					<h1 id="fh5co-logo"><a href="{{ url('/') }}"><i class="icon-airplane"></i>Traveliya</a></h1>
					<h1 id="fh5co-logo"><a href="{{ url('/index') }}"><img class="logo" src="images/traveliya_adam2.png" ></a></h1>

					<div class="logo wow FadeinLeft">
					<a href="{{ url('/index') }}"><img src="images/" alt=""></a>
					</div>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="{{ url('/') }}">Home</a></li>

							<li><a href="{{ url('/plane') }}">Pesawat</a></li>
							<li><a href="{{ url('/train') }}">Kereta</a></li>

							@guest

							<li><a href="{{ route('login') }}">Login</a></li>
              <li ><a href="{{ route('register') }}">Register</a></li>

							@else

							@if(Entrust::hasRole('admin'))
							<li ><a href="{{ url('admin') }}">Admin Page</a></li>
							@endif

							@inject('count' , 'App\Http\Controllers\HomeController')

							<li role="presentation"><a href="{{ url('bookinglist') }}"> Booking List <span class="badge">{{ $count->count() }}</span></a></li>
							<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
											{{ Auth::user()->name }}
									</a>
									<ul class="dropdown-menu">
											<li>
													<a href="{{ route('logout') }}"
															onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
															Logout
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
															{{ csrf_field() }}
													</form>
											</li>
									</ul>
							</li>
							@endguest
						</ul>
					</nav>
				</div>
			</div>
		</header>


    @include('flash::message')
    @yield('content')



		<script src="{{ asset('js/select2.min.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/sticky.js') }}"></script>

    <!-- Stellar -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Superfish -->
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <!-- CS Select -->
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/selectFx.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
		<script src="{{ asset('jquery-1.10.2.js')}}" type="text/javascript"></script>
 		<script src="{{ asset('jquery-ui.js') }}" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

		<script>
			$( function() {
				$( "#datepicker" ).datepicker({
					 format: "yyyy-mm-dd",
					 startDate: "+1d",
					 autoclose: true,
					 endDate: "+90d"
				});


				$( "#born_date" ).datepicker({
					 format: "dd-mm-yyyy",
					 startView: 2,

				});

				$('#payment_via').on('change',function(){
					if( $(this).val()==="BCA"){
					$("#otherType").show()
					}
					else{
					$("#otherType").hide()
					}
				});

				// In your Javascript (external .js resource or <script> tag)
				// $(document).ready(function() {
				//     $('.js-example-basic-single').select2();
				// });

				$("#js-example-basic-single").select2();
				$("#js-example-basic-double").select2();



			} );
		</script>
    </body>
  </html>

		<!-- end:header-top -->
