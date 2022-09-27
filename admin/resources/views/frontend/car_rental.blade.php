@include('frontend.layouts.head')

<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

@include('frontend.layouts.header')

<div class="page-banner">
	<div class="container">
		<h1 class="page-title">Car Rental</h1>
	</div>
</div>
<div class="all-cars">
<div class="single-car-details">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-9 col-md-9 product_card">
				<!-- <div class="row align-items-center" style="height:700px;">
					<div class="col-lg-6 col-md-6 p-2">
						<img src="{{ 'upload/cars/'.$car->image }}" style="height:675px;" class="w-100">
					</div>
					<div class="col-lg-6 col-md-6 card__area mobvw" style="height:675px;">
						<div class="single-car-content" style="color:#fff !important; ">
							<h2>{{ $car->carname }}</h2>
							<h2 class="d-flex"><span>Charges : </span>$1450  &nbsp;&nbsp;<del><small>$1550</small></del></h2>
							<p>{!! htmlspecialchars_decode(nl2br($car->description)) !!}</p>
							<p>{!! htmlspecialchars_decode(nl2br($car->specs)) !!}</p>
							<a href="#" class="car-btn black-btn">Book Now</a>
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="column" style="background-color:#fff;">
					<img src="{{ 'upload/cars/'.$car->image }}" style="height:100%;" class="w-100">
					</div>
					<div class="column" style="height:auto; background: linear-gradient(90deg, #FC466B 0%, #3F5EFB 100%);
    box-shadow: 1px 1px 25px #ffffff;
    border-radius: 0px 10px 10px 0;">
						<div class="single-car-content" style="color:#fff !important; ">
							<h2>{{ $car->carname }}</h2>
							<h2 class="d-flex"><span>Charges : </span>$1450  &nbsp;&nbsp;<del><small>$1550</small></del></h2>
							<p>{!! htmlspecialchars_decode(nl2br($car->description)) !!}</p>
							<p>{!! htmlspecialchars_decode(nl2br($car->specs)) !!}</p>
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
