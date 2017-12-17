@extends('frontend.template.template')

@section('bannerClass', 'banner-1')

@section('content')
	<!-- contact -->
		<div class="mail">
			<div class="container">
				<div class="w3ls-heading">
					<h2 class="h-two">Contact</h2>
					<p class="sub two">Morbi in dui pretium, finibus sapien vel.</p>
				</div>
				<div class="agileits_mail_grids">
					<div class="col-md-7 agileits_mail_grid_left">
						<form action="#" method="post">
							<h4>Your Name*</h4>
							<input type="text" name="Name" placeholder="Name..." required="">
							<h4>Your Email*</h4>
							<input type="email" name="Email" placeholder="Email..." required="">
							<h4>Your Phone Number*</h4>
							<input type="text" name="Phone" placeholder="Phone..." required="">
							<h4>Your Message*</h4>
							<textarea placeholder="Message..." name="Message"></textarea>
							<input type="submit" value="Send message">
						</form>
					</div>
					<div class="col-md-5 agileits_mail_grid_right">
						<div class="agile-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26063.984716162606!2d144.9228869850419!3d-37.8295573872697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2sMelbourne+VIC+3004%2C+Australia!5e1!3m2!1sen!2sin!4v1479988489554" allowfullscreen></iframe>
						</div>
						<div class="left-agileits">
							<h3>Address</h3>
								<ul>
									<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Street, Melbourne City, Australia.</li>
									<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
									<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
								</ul>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<!-- //contact -->
	<!-- footer start here --> 
	<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
					<div class="agileits-w3layouts-tweets">  
						<h5><a href="index.html"><i class="fa fa-pagelines" aria-hidden="true"></i>Growing</a></h5> 
						<div class="social-icon footerw3ls">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div>
					</div>
					<p>Aenean vitae metus sit amet purus sodales blandit. Nullam ut dolor eu urna viverra semper. Mauris est odio, laoreet laoreet sapien non, sollicitudin bibendum nulla.</p>
				</div> 
				<div class="col-md-3 col-sm-3 footer-wthree-grid">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="index.html"><span class="glyphicon glyphicon-menu-right"></span> Home</a></li>
						<li><a href="about.html"><span class="glyphicon glyphicon-menu-right"></span> About</a></li> 
						<li><a href="gallery.html"><span class="glyphicon glyphicon-menu-right"></span> Gallery</a></li>
						<li><a href="codes.html"><span class="glyphicon glyphicon-menu-right"></span> Short Codes</a></li>
						<li><a href="contact.html"><span class="glyphicon glyphicon-menu-right"></span> Contact</a></li>
					</ul>
				</div> 	 
				<div class="col-md-4 col-sm-4 footer-wthree-grid">
					<h3>Contact Info</h3>
					<ul>
						<li>123 Broome St,2nd Block</li> 
						<li>NY 10002, New York</li>
						<li>Phone: +01 111 222 3333</li>
						<li><a href="mailto:info@example.com"> mail@example.com</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>		
			</div>
			<div class="copy-right"> 
				<p>© 2017 Growing . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts.</a></p>
			</div>
		</div>
	</div> 
	<!-- //footer end here -->  
	
@endsection