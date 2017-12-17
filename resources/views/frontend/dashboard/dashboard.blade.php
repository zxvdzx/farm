@extends('frontend.template.template')

@section('bannerClass', 'banner-1')

@section('banner')
<!-- banner-text -->
	<div class="banner-text"> 
		<div class="container">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-w3lstext">
							<!-- <h3>Improve Your Crop !</h3> -->
							<img src="{{ asset($pathp.'assets/frontend/images/slide1.png') }}" class="msg-photo img_slider" alt="Alex's Avatar" />
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin</p> -->
						</div>
					</li>
					<li>
						<div class="banner-w3lstext">
							<!-- <h3>Lorem Ipsum Dolor Sit </h3> -->
							<img src="{{ asset($pathp.'assets/frontend/images/slide2.png') }}" class="msg-photo img_slider" alt="Alex's Avatar" />
							<!-- <p>Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. Lorem ipsum dolor sit amet elit consectetur adipiscing. Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin</p> -->
						</div>
					</li>
					<li>
						<div class="banner-w3lstext">
							<!-- <h3>Mauris Ex Nulla Aliquam </h3> -->
							<img src="{{ asset($pathp.'assets/frontend/images/slide3.png') }}" class="msg-photo img_slider" alt="Alex's Avatar" />
							<!-- <p>Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. </p> -->
						</div>
					</li>
					<li>
						<div class="banner-w3lstext">
							<!-- <h3>Mauris Ex Nulla Aliquam </h3> -->
							<img src="{{ asset($pathp.'assets/frontend/images/slide4.png') }}" class="msg-photo img_slider" alt="Alex's Avatar" />
							<!-- <p>Mauris ex nulla, aliquam ornare facilisis nec convallis pulvinar a non nunc non leo sollicitudin, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida mauris non mi gravida, at sollicitudin odio efficitur. </p> -->
						</div>
					</li>
				</ul> 
			</div> 	 
		</div>
	</div>
	<!-- //banner-text -->    
@endsection


@section('content')
<!-- welcome -->
	<div class="features">
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">Features</h2>
				<p class="sub two">Morbi in dui pretium, finibus sapien vel.</p>
			</div>
		<div class="w3-agile-top-info">	
			<div class="w3-welcome-grids">
				<div class="col-md-7 w3-welcome-left">
					<h5>In pellentesque, lectus at auctor</h5>
					<p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu.. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id.</span></p>
				</div>
				<div class="col-md-5 w3ls-welcome-img1">
					<img src="images/s1.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3-welcome-grids w3-welcome-bottom">
				<div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2">
					<img src="images/s2.jpg" alt="" />
				</div>
				<div class="col-md-7 w3-welcome-left">
					<h5>Cras semper ante sapien, in ornare </h5>
					<p>Ut fringilla euismod sagittis. Cras semper ante sapien, in ornare nisi euismod eu.. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In pellentesque, lectus at auctor luctus, lacus nibh dignissim ante. <span>Phasellus vestibulum velit sed nisi ultricies scelerisque. Vivamus ligula mauris, euismod in dictum id.</span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
	<!-- //welcome -->
	<!-- testimonials -->
	<div class="testimonials">
	   <div class="test_agile_info">
		<div class="container">
			<ul id="flexiselDemo1">			
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								<h5>Mark Henry</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t11.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Lorem laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								<h5>Linda Carl</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t21.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
					
					</div>
				</li>
				<li>
					<div class="wthree_testimonials_grid_main">
						<div class="wthree_testimonials_grid">
							<h4>What Client say</h4>
							<p>Donec laoreet eu purus eu viverra. Vestibulum sed convallis massa,
								eu aliquet massa. Suspendisse lacinia rutrum tincidunt. Integer id erat porta, 
								convallis tortor.</p>
								
								<h5>Michael Paul</h5>
							<div class="wthree_testimonials_grid_pos">
								<img src="images/t31.jpg" alt=" " class="img-responsive" />
							</div>
						</div>
						
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- //testimonials -->

	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">Our Services</h3>
				<p class="sub two">Morbi in dui pretium, finibus sapien vel.</p>
			</div>
			<div class="w3-agileits-services-grids"> 
				<div class="col-md-6 w3-agileits-services-right">
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-anchor" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-ship" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-right-grids">
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
							<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6 services-right-grid">
							<div class="services-icon hvr-radial-in">
								<i class="fa fa-plane" aria-hidden="true"></i>
							</div>
							<div class="services-icon-info">
								<h5>Phasellus suscipit</h5>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 w3-agileits-services-left">
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="col-md-6 agile_banner_bottom1_left">
			<img src="images/s3.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agile_banner_bottom1_right">
			<h3>occaecat cupidatat non proident, sunt in culpa qui officia</h3>
			<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
				Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
				adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
			<div class="details">
				<a href="#" data-toggle="modal" data-target="#myModal">More Details</a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- banner-bottom1 -->
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3ls-heading">
				<h3 class="h-two">Newsletter</h3>
				<p class="sub two">Morbi in dui pretium, finibus sapien vel.</p>
			</div>
			<form action="#" method="post"> 
				<input type="text" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Subscribe">
				<div class="clearfix"> </div> 
			</form> 
		</div> 
	</div>
	<!-- //newsletter -->
	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<i class="fa fa-pagelines" aria-hidden="true"></i>Growing
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/s1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //bootstrap-pop-up -->
@endsection
