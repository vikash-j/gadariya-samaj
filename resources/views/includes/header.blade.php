<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CG Gadriya Samaj :: @yield('title')</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="Geshwar Kumar">

		<!-- FONTS ONLINE -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800,700italic' rel='stylesheet' type='text/css'>

		<!--MAIN STYLE-->
		<link href="{{ URL::asset('public/app-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/app-assets/css/main.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/app-assets/css/style.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/app-assets/css/responsive.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/app-assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/rs-plugin/css/settings.css') }}" media="screen" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<style>
			/*body{
			  height: 100vh;
			  text-align: center;
			}*/
					/*Modal*/
			h4 {
			  font-weight: bold;
			  color: #fff;
			}
			.close {
			  color: #fff;
			  transform: scale(1.2)
			}
			.modal-content {
			  font-weight: bold;
			  background: linear-gradient(to bottom right,#F87E7B,#B05574);
			  text-align: center;
			}
			.form-control {
			  margin: 1em 0;
			}
			.form-control:hover, .form-control:focus {
			  box-shadow: none;
			  border-color: #fff;
			}
			.username, .password {
			  border: none;
			  border-radius: 0;
			  box-shadow: none;
			  border-bottom: 2px solid #eee;
			  padding-left: 0;
			  font-weight: normal;
			  background: transparent;
			}
			.form-control::-webkit-input-placeholder {
			  color: #eee;
			}
			.form-control:focus::-webkit-input-placeholder {
			  font-weight: bold;
			  color: #fff;
			}
			.login {
			  padding: 6px 20px;
			  border-radius: 20px;
			  background: none;
			  border: 2px solid #FAB87F;
			  color: #FAB87F;
			  font-weight: bold;
			  transition: all .5s;
			  margin-top: 1em;
			}
			.login:hover {
			  background: #FAB87F;
			  color: #fff;
			}
		</style>
	</head>
	<body>
	<!-- Page Wrap -->
	<div id="wrap">
