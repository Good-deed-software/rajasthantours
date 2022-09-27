@include('frontend.layouts.head')

@include('frontend.layouts.header')



<div class="page3-3 heading-div">
	<div class="container">
		<h1>Rajasthan <br>Tours</h1>
		<h3>FULLY ESCORTED SMALL GROUP LUXURY </h3>
	</div>
</div>

<div class="page3-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-md-10">
				<h4 class="page-sub-heading">RAJASTHAN TOURS <span>2022 & 2023 TOURS</span></h4>
				<p>“ Every day of the tour was incredible, this would have to be the best destination I have been to.”</p>
				<h6>JOHN DOE</h6>
			</div>
		</div>
	</div>
</div>

<div class="page3-5">
	<div class="container">
		<div class="row">
			@foreach($tour as $ts)
			<div class="col-lg-4 col-md-4">
				<div class="tours">
					<img src="{{ asset('upload/tours/'.$ts->image) }}" style="height:350px !important" class="w-100 mb-4">
					<h3>{{ $ts->tittle }}</h3>
					<address class="mb-4">{{ $ts->duration }}<br>
					{{ $ts->group_info }}<br>
					{{ $ts->destination }}</address>
					<p class="mb-4">{!! htmlspecialchars_decode(nl2br($ts->description)) !!}</p>
					<a href="{{ route('frontend.itineraries_details') }}" class="btn btn-outline-primary round-50">LEARN MORE</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="page3-10 heading-div">
	<div class="container">
		<h1 class="mb-4">Tour Extention</h1>
		<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
		<a href="#" class="btn btn-outline-light round-50 py-2 px-4">Learn More</a>
	</div>
</div>

<div class="page3-11">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5 col-md-5">
				<h3>Rest like <br> a Maharaja</h3>
				<p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
				<a href="#" class="btn btn-outline-primary round-50">Learn More</a>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="places-images">
					<div class="owl-carousel owl-theme more-services">
						<div class="item">
							<img src="{{ asset('front_assets/assets/img/travel.jpg')}}" >
						</div>
						<div class="item">
							<img src="{{ asset('front_assets/assets/img/travel.jpg')}}" >
						</div>
						<div class="item">
							<img src="{{ asset('front_assets/assets/img/travel.jpg')}}" >
						</div>
						<div class="item">
							<img src="{{ asset('front_assets/assets/img/travel.jpg')}}" >
						</div>
						<div class="item">
							<img src="{{ asset('front_assets/assets/img/travel.jpg')}}" >
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 mt-5">
				<div class="feaadbcak text-center">
					<p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					<p class="says-person">John Doe</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="page3-12">
	<div class="row m-0">
		<div class="col-lg-8 col-md-8 p-0">
			<img src="{{ asset('front_assets/assets/img/marigold.jpg')}}" class="w-100">
		</div>
		<div class="col-lg-4 col-md-4 p-0">
			<img src="{{ asset('front_assets/assets/img/holi.jpg')}}" class="w-100">
			<img src="{{ asset('front_assets/assets/img/holi.jpg')}}" class="w-100">
		</div>
		
		<div class="col-lg-4 col-md-4 p-0">
			<img src="{{ asset('front_assets/assets/img/holi.jpg')}}" class="w-100">
			<img src="{{ asset('front_assets/assets/img/holi.jpg')}}" class="w-100">
		</div>
		<div class="col-lg-8 col-md-8 p-0">
			<img src="{{ asset('front_assets/assets/img/marigold.jpg')}}" class="w-100">
		</div>
	</div>
</div>
@include('frontend.layouts.footer')
