<div class="footer-agile">
		<div class="container">
			<div class="footer-agileinfo"> 
				<div class="col-md-5 col-sm-5 footer-wthree-grid"> 
					<div class="agileits-w3layouts-tweets">  
						<h5><a href="index.html"><i class="fa fa-pagelines" aria-hidden="true"></i>Sinergi</a></h5> 
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
				<p>© {{ date('Y') }} Sinergi. All rights reserved</a></p>
			</div>
		</div>
	</div> 
	
	{!! Html::script( $pathp.'assets/frontend/js/jquery.flexslider.js') !!}
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>

	<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems:1,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:1
						},
						tablet: { 
							changePoint:768,
							visibleItems: 1
						}
					}
				});
				
			});
	</script>
	{!! Html::script( $pathp.'assets/frontend/js/jquery.flexisel.js') !!}
	{!! Html::script( $pathp.'assets/frontend/js/move-top.js') !!}
	{!! Html::script( $pathp.'assets/frontend/js/easing.js') !!}

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
<script type="text/javascript">
	$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
	});
</script>
<!-- //smooth-scrolling-of-move-up -->   
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

 {!! Html::script( $pathp.'assets/frontend/js/bootstrap.js') !!}