@extends('frontend.template.template')

@section('bannerClass','banner-1')

@section('content')
<div class="container">
		<br>
		
		<div class="col-md-4">
			<img src="{{ asset($pathp.'assets/frontend/images/slide2.png') }}" class="msg-photo img_slider" alt="Alex's Avatar" />
		</div>



		<div align="left">
			<div  class="col-lg-4 col-sm-5 col-xs-12 pull-right">
				<div>Lumbung Benih Bambu Samida </div>
				<b> Location : Kecamatan Selaawi , Kabupaten Garut</b>
				<br>

				<b> Kebutuhan dana : 100.000.000</b>
				<br>
				<b> Dana terkumpul : </b>
				<br>
				<b> Periode  : </b>
				<div> Januari 2018 - Juni 2018</div>

			</div>
		</div>
	
</div>



@endsection