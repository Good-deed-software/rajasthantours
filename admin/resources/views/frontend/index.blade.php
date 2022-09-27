@include('frontend.layouts.head')
<style>
    .button11{
	display: inline-block;
    padding: 10px;
    margin: 0px 30px 10px;
	}
    
</style>
@include('frontend.layouts.header')

<div class="w-100" style="height:85vh;">
   <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-ride="carousel">
      <div class="carousel-inner" style="height:85vh">
        @foreach($slider as $data)
            <img src="{{ asset('upload/slider_image/'.$data->slider_image) }}" alt="slide 1" class="carousel-item {{$data['id']==1?'active':''}}" style="height:85vh; background-size:cover">
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
</div>
<script>
   $('.carousel').carousel()
</script>
<div class="page3-5 pt-5">
	<div class="container">
		<div class="row">
		    <div class="col-lg-12 col-md-12 mb-4">
		        <h1 class=" _h text text-center mb-0">Itineraries</h1>
                <hr class="_line" />
		    </div>
            @foreach($tour as $t)
			<div class="col-lg-4 col-md-4 tours11">
				<div class="tours">
					<img src="{{asset('upload/tours/'.$t->image) }}" style="height:350px !important" class="w-100 mb-4">
					<div class="inside-tours">
					    <h3>{{ $t->tittle }}</h3>
    					<address class="mb-4">{{ $t->duration }}<br>
    					{{ $t->group_info }}<br>
    					{{ $t->destination }}</address>
    					<p class="mb-4">{!! htmlspecialchars_decode(nl2br($t->description)) !!}</p>
    					<a href="{{ route('frontend.itineraries_details') }}" class="btn button11 btn-outline-primary round-50">LEARN MORE</a>
					</div>
				</div>
			</div>
            @endforeach
			
		</div>
	</div>
</div>

<!--car rental-->
<div class="page3-5 pt-5" style="padding:0px !important;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 mb-4">
    <h1 class=" _h text text-center mb-0">Hire Car From Us</h1>
    <hr class="_line" />
</div>
<div class="col-xs-12 col-sm-12 d-flex">
<div class='split-pane col-xs-12 col-sm-6 uiux-side'>
  
</div>
    
<div class='split-pane col-xs-12 col-sm-6 frontend-side'>
  <p>For culture aficionados, there are a number of fairs and festivals in Rajasthan to witness. The flamboyant manner in which even the cattle fairs take place in Pushkar and Nagaur is truly something to behold. Some of the most famous tourism festivals that showcase the rich traditions, customs, folk dance and music of the state are the Desert Festival, Bikaner Camel Festival, Nagaur Fair, Pushkar Fair, Elephant Festival, Mewar Festival, Mount Abu Winter Festival, Gangaur Festival and Teej.</p>
					<a href="{{ route('frontend.car_rental') }}" class="button text-center">Checkout</a>
</div>
<div id='split-pane-or'>
  
</div>		
</div>
</div>
</div>
</div>

<div class="page4-3">
	<div class="container">
	    <div class="col-lg-12 col-md-12 mb-4">
            <h1 class=" _h text text-center mb-0">Explore Tours</h1>
            <hr class="_line" />
        </div>
		<div class="row align-items-center">
			<div class="col-lg-3 col-md-3">
				<div class="thematic-travel">
					<h4>Thematic Travel</h4>
					<p>Rajasthan is a state of vibrant folk dance and music, gigantic forts and palaces, spicy food, colourful and large turbans, extensive golden sand desert, camels and rich handicraft. It is therefore, an incredible place to visit in India for enjoying unforgettable holidays. Sprawling in an area of 342239 sq km, Rajasthan is perfect for history buffs, culture aficionados, adventure lovers, wildlife enthusiasts, family vacations, honeymoon, and more.</p>
				</div>
			</div>
			@foreach($travel as $t)
			<div class="col-lg-3 col-md-3 p-0">
				<div class="thematic-travel-box">
					<img src="{{asset('upload/feedback/'.$t->image) }}" style="height:400px;" class="w-100">
					<div class="another-overlay-section" style="color:#dadada !important">
						<h5>{{ $t->title }}</h5>
						<p class="hidden-text">{!! htmlspecialchars_decode(nl2br($t->description)) !!}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<section class="w-100 mt-0 testimonials-slider" style="color:#303440; background:#e7e7e7">
   <article class=" pb-5 d-flex flex-column justify-content-center align-items-center text-center ">
      <div class=" container pt-5">
         <h1 class=" _h text ">Testimonials</h1>
         <hr class="_line" />
         <!-- <p>
            This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
            sollicitudin, lorem
            quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet
            nibh vulputate
            cursus a sit amet mauris.
            </p> -->
      </div>
      
      <div id="demo" class="carousel slide" data-ride="carousel">
         <!-- The slideshow -->
         <div class="carousel-inner">
            @foreach($testimonial as $tn)
            <div class="carousel-item {{$tn['id']==1?'active':''}}">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8">
                        <div style="padding: 20px">
                  <div class="text-center">
                      <div class="testimonial-user">
                          <img src="{{asset('front_assets/assets/img/user.png') }}" alt="user">
                          <div class="user-details">
                            <h4><strong>{{ $tn->name }}</strong></h4>
                            <p class="testimonial_subtitle"><span>{{ $tn->city }}</span></p>
                            <p>
                                 <span class="fa fa-star sselected"></span>
                                 <span class="fa fa-star sselected"></span>
                                 <span class="fa fa-star sselected"></span>
                                 <span class="fa fa-star sselected"></span>
                                 <span class="fa fa-star sselected"></span>
                              </p>
                          </div>
                      </div>
                  </div>
                  <!-- <strong class="qtsss"><i class="fas fa-quote-left"></i></strong> -->
                  <p class="testimonial_para">{!! htmlspecialchars_decode(nl2br($tn->description)) !!}</p>
                  <br>
                  <div>
                     <!-- <div class="col-sm-2">
                        <img src="http://demos1.showcasedemos.in/jntuicem2017/html/v1/assets/images/kiara.jpg" class="img-responsive" style="width: 80px">
                        </div> -->
                  </div>
               </div>
                    </div>
                </div>
            </div>
            @endforeach
         </div>
         <!-- Left and right controls -->
         <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
         </a>
         <a class="carousel-control-next" href="#demo" data-slide="next">
         <span class="carousel-control-next-icon"></span>
         </a>
      </div>
   </article>
</section>
<!-- <iframe width="100%" height="545" src="https://www.youtube.com/embed/sWMnfd4Cras?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
   allowfullscreen></iframe>
   </iframe> -->
<!-- why rely -->

<!-- footer -->
@include('frontend.layouts.footer')
<!-- footer -->