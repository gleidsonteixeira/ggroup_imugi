<!doctype html>

<html lang="pt-Br"> 

<head>

	<meta charset="utf-8">

	<title>@yield('titulo')</title>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/portal/css/style.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/portal/css/elegance.css')}}">

	<link rel='stylesheet' href="{{asset('assets/portal/css/layout.css')}}" type='text/css' media='all' />

	<link rel="stylesheet" type="text/css" href="{{asset('assets/portal/css/portal.css')}}">

	<link rel='stylesheet'  href="{{asset('assets/portal/css/shortcodes.css')}}" type='text/css' media='all' />

	<link href="{{asset('assets/portal/images/icon/logo-imugi.png')}}" rel="shortcut icon">

	<link rel='stylesheet'  href="{{asset('assets/portal/css/theme-photography.css')}}" type='text/css' media='all' />

	<link rel='stylesheet'   href="{{asset('assets/portal/css/be-themes-embedded.css')}}" type='text/css' media='all' />

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel='stylesheet' href="{{asset('assets/portal/css/animate-custom.css')}}" type='text/css' media='all' />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/portal/css/animation-custom.css')}}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script type='text/javascript' src="{{asset('assets/portal/js/jquery.js')}}"></script>

	<script type='text/javascript' src="{{asset('assets/portal/js/jquery-migrate.min.js')}}"></script>

</head>

<body class="left-header" >