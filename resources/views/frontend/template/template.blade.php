<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sinergi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Growing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
@include ('frontend.template.partials.header')

@yield('styles')
<style type="text/css">
	.img_slider {
		height: 500px;
	}
</style>
<!-- //web-fonts --> 
</head>
<body>
	<!-- banner -->
	<div class="@yield('bannerClass')">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="#0"><i class="fa fa-pagelines" aria-hidden="true"></i>Sinergi</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					@include('frontend.template.partials.menunav')
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
		@yield('banner')
	</div>
	<!-- //banner --> 

	@yield('content')

	<!-- footer start here --> 
	@include ('frontend.template.partials.footer')

	@yield('scripts')

	</body>
</html>