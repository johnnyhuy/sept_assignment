<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<title>Appointment Booking System</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="container">
		@if (Auth::check())
		<ul class="nav nav-pills pull-left">
<<<<<<< HEAD
			<li role="presentation" class="{{ Request::is('/') ? 'active' : null }}"><a href="/">Home</a></li>
			@if (Auth::check())
				<li role="presentation" class="{{ Request::is('bookings') ? 'active' : null }}"><a href="/bookings">Bookings</a></li>
				<li role="presentation" class="{{ Request::is('bookings/new') ? 'active' : null }}"><a href="/bookings/new">Create Booking</a></li>
			@endif
=======
			<li role="presentation" class="{{ Request::is('bookings') ? 'active' : null }}"><a href="/bookings">Bookings</a></li>
			<li role="presentation" class="{{ Request::is('create_booking') ? 'active' : null }}"><a href="/create_booking">Create Booking</a></li>
>>>>>>> 812c2dc24e48fdd28042bad4fbba8c86969bf008
		</ul>
		
			<div class="pull-right user">
				Logged in as {{ Auth::user()->username }}
				<a href="/logout">Logout</a>
			</div>
		@endif
		<div class="clearfix"></div>
		<div class="header">
			<a class="header__title" href="/">
				<h1>
				@if (\App\BusinessOwner::first())
					{{ \App\BusinessOwner::first()->business_name }}
				@else
					Business Placeholder
				@endif
				</h1>
			</a>
			@php
				// Dynamic page titles
				$title = ": ";

				// Check url for title
				if (Request::is('bookings')) {
					$title .= "Customer Bookings";
				}
				elseif (Request::is('login')) {
					$title .= "Login";
				}
				elseif (Request::is('register')) {
					$title .= "Customer Registration";
				}
				elseif (Request::is('admin')) {
					$title .= "Admin";
				}
				elseif (Request::is('create_booking')) {
					$title .= "Create a Booking";
				}
				else {
					// Else default
					$title = "";
				}
			@endphp
			<h3 class="header__subtitle">Booking System{{ $title }}</h3>
		</div>
	</div>
	<div class="container">
		@if ($flash = session('message'))
			<div class="alert alert-success">
				{{ $flash }}
			</div>
		@endif
		@yield('content')
	</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<footer>
		LCJJ Development Team
	</footer>
</body>

</html>
