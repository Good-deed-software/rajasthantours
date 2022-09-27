@include('frontend.layouts.head')
<style>
	p.p{
		text-align:justify !important;
	}
</style>
@include('frontend.layouts.header')


<div class="page-banner" style="background-image:url({{ asset('front_assets/assets/img/page4-banner.jpg')}});">
	<div class="container">
		<!-- <h1 class="page-title">Page 4</h1> -->
	</div>
</div>
<div class="page4-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<img src="{{ asset('front_assets/assets/img/intro-banner.jpg')}}" class="w-100" alt="intro-banner">
			</div>
			<div class="col-lg-8 col-md-8">
				<div class="page4-1-details text-start">
					<h1>Rajasthan Tours</h1>
					<p class="p"><strong>Hello!</strong> <br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					<strong>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</strong>
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <br><br>
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat snon
					<strong>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
				</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page4-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 mb-3">
				<h3>SUGGESTED TOURS FOR INDIA</h3>
				<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
		<div class="row">
			@foreach($feedback as $fb)
			<div class="col-lg-3 col-md-3">
				<div class="tour-card">
					<a href="{{ route('frontend.feedback_details',$fb->id) }}">
					<img src="{{ asset('upload/feedback/'.$fb->image)}}" style="height:330px; !important;" class="w-100 main-img">
					<div class="tour-name-cost">
						<h3>{{ $fb->title }}</h3>
						<p>Price from <span>{{ $fb->price }}</span></p>
					</div>
					<div class="overlay-section">
						<p class="tour-name p">{{ $fb->title }}</p>
						<p class="description p" style="margin-bottom:12px;">{!! htmlspecialchars_decode(nl2br($fb->description)) !!}</p>
						<p class="prices mt-5 p">Price from <span>{{ $fb->price }}</span></p>
						<p class="days p">{{ $fb->duration }}</p>
					</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row">
			@foreach($feed as $feeds)
			<div class="col-lg-3 col-md-3">
				<div class="tour-card2">
					<div class="card-img">
						<img src="{{ asset('upload/feedback/'.$feeds->image)}}" style="height:250px;" class="w-100" alt="travel">
						<h5>{{ $feeds->title }}</h5>
					</div>
					<div class="tour-card2-description" style="height:240px;">
						<p class="p">{!! htmlspecialchars_decode(nl2br($feeds->description)) !!}</p>
						<p class="p" style="margin-top:auto; height:35px;">{{$feeds->duration}} Days Price from <span>$ {{ $feeds->price }}</span></p>
					</div>
				</div>
			</div>
			@endforeach
			<div class="col-lg-12 col-md-12 text-center mt-3">
				<a href="#" class=" btn btn-outline-light">Our Trips <i class="fa fa-chevron-right"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="page4-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3 col-md-3">
				<div class="thematic-travel">
					<h4>Thematic Travel</h4>
					<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			@foreach($travel as $t)
			<div class="col-lg-3 col-md-3 p-0">
				<div class="thematic-travel-box" style="color:#dadada;">
					<img src="{{ asset('upload/feedback/'.$t->image)}}" style="height:400px;" class="w-100">
					<div class="another-overlay-section">
						<h5>{{ $t->title }}</h5>
						<p class="hidden-text p">{!! htmlspecialchars_decode(nl2br($t->description)) !!}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>



<div class="faq">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h3 class="text-center">Why travel with Indian Experience?</h3>
			</div>
			<div class="col-lg-6 col-md-6">
				<h5>For An offbeat Escape</h5>
				<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
				<h5>For An offbeat Escape</h5>
				<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
			<div class="col-lg-6 col-md-6">
				<h5>For An offbeat Escape</h5>
				<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
				<h5>For An offbeat Escape</h5>
				<p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			</div>
		</div>
	</div>
</div>

<div class="brands">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-md-2 ">
				<img src="{{ asset('front_assets/assets/img/brand-1.png')}}" alt="brand1" class="w-100">
				
				
			</div>
			<div class="col-lg-2 col-md-2 ">
				<img src="{{ asset('front_assets/assets/img/brand-2.png')}}" alt="brand2" class="w-100">
			</div>
			<div class="col-lg-2 col-md-2 ">
				<img src="{{ asset('front_assets/assets/img/brand-3.png')}}" alt="brand3">
			</div>
		</div>
	</div>
</div>
@include('frontend.layouts.footer')
