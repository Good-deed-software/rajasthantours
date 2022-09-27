@include('frontend.layouts.head') 
@include('frontend.layouts.header')

<div class="page-banner" style="background-image:url({{ asset('upload/cars/'.$details->image) }})">
	<div class="container">
		<h1 class="page-title">{{ $details->carname  }}</h1>
	</div>
</div>
<div class="single-car-details">
	<div class="container">
	<div class="row align-items-center justify-content-center">
	<div class="col-lg-9 col-md-9 product_card">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6 p-5">
						<img src="{{ asset('upload/cars/'.$details->image) }}" style="height:450px;" class="w-100">
					</div>
					<div class="col-lg-6 col-md-6 card__area">
						<div class="single-car-content">
							<h2>{{ $details->carname  }}</h2>
							<h2 class="d-flex"><span>Charges : </span>$1450  &nbsp;&nbsp;<del><small>$1550</small></del></h2>
							<p>{!! htmlspecialchars_decode(nl2br($details->specs)) !!}</p>
							<!-- <p>{!! htmlspecialchars_decode(nl2br($details->description)) !!}</p> -->
							<a href="#" class="car-btn black-btn">Book Now</a>
						</div>
					</div>
				</div>
			</div>
		    </div>
		</div>
	</div>
</div>
@include('frontend.layouts.footer')