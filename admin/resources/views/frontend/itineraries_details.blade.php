@include('frontend.layouts.head')

<style>
    p{
        text-align:justify;
    }
</style>

@include('frontend.layouts.header')
<div class="page3-3 heading-div">
	<div class="container">
		<h1>Rajasthan <br>Tours</h1>
		<h3>FULLY ESCORTED SMALL GROUP LUXURY </h3>
	</div>
</div>

<div class="i-details-page2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 text-center">
                
                <h1>{{ $tours->title }}</h1>
                <h3>{{ $tours->Itnerary_date }}</h3>
                <h5>Delhi – Varanasi – Taj Mahal – Ranthambore National Park – Samode – Jaipur – Mumbai</h5>
                <p><strong>{!! htmlspecialchars_decode(nl2br($tours->description)) !!}</strong></p>
                
            </div>
        </div>
    </div>
</div>

<div class="i-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="all-details">
                    <div class="row mt-4 mb-4">
                        <div class="col-lg-12 col-md-12">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                              <!-- The slideshow -->
                              <div class="carousel-inner">
                                @foreach($feed as $fd)
                                <div class="carousel-item {{$fd['id']==1?'active':''}}">
                                  <img src="{{ asset('upload/int_details/'.$fd->image) }}" style="height:450px;" alt="travel">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="short-desc">
                    <p class="short-title">WHAT'S INCLUDED</p>
                    <form action="" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i>Enquiry</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="number" class="form-control" id="nombre" name="number" placeholder="Enter Your Number" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="example@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Text Your Message" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Enquiry" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>

                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="placess-details">
                    <h3 class="details-title">Trip Itinerary</h3>
                    <div class="tours-details pl-5" >
                        <p class="alignjust" class="ul-title">{!! htmlspecialchars_decode(nl2br($tours->long_description)) !!}</p>
                    </div>
                    
                </div>
            </div>
    </div>
    </div>
</div>



@include('frontend.layouts.footer') 