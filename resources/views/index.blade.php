@extends('layouts.main')

@section('title', 'Geny')

@section('content')
<div class="content">
	<div class="title">
		<img src="img/GenyParatriatlonTransparente.png" alt="">
	</div>
	<div class="link">
		<a href="https://www.facebook.com/juanmageny" class="fa fa-facebook" target="new"></a>
		<a href="http://instagram.com/juanmanuelgeny" class="fa fa-instagram" target="new"></a>
		<a href="https://twitter.com/paratriatlon" class="fa fa-twitter" target="new"></a>
		<a href="https://linkedin.com/juanmageny" class="fa fa-linkedin"></a>
	</div>
	<div class="sponsor">
		<div class="row">
			<div class="col-md-3">
				<a href="http://mapuchebtt.com/" target="new">
					<img class="img-fluid" src="{{ 'img/sponsor/mapucheBTT.png' }}" alt="">
					{{-- <img class="img-fluid" src="{{ Storage::url('sponsor/mapucheBTT.png') }}" alt=""> --}}
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://infoenard.org.ar/" target="new">
					<img class="img-fluid" src="{{ 'img/sponsor/enard.png' }}" alt="">
				</a>
			</div>
			<div class="col-md-3">
				<a href="https://www.facebook.com/pablofajian/" target="new">
					<img class="img-fluid" src="{{ 'img/sponsor/pablofajian.png' }}" alt="">
				</a>
			</div>						
			<div class="col-md-3">
				<a href="http://www.cornel.com.ar/" target="new">
					<img class="img-fluid" src="{{ 'img/sponsor/cornel.png' }}" alt="">
				</a>
			</div>			

		</div>                	
	</div>
</div>
@endsection