<body>
   <div class=" position-absolute top w-100" style="z-index:2;">
   <nav class="navbar navbar-expand-lg w-100 header-bar-new  _menu-font pt-0">
   <a class="navbar-brand _logo" href="{{route('frontend.index')}}">
   <img src="{{asset('front_assets/assets/img/logo.png')}}">
   </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
   <span class="navbar-toggler-icon" style="float:right"><i class="fas fa-bars"></i></span>
   </button>
   <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
   <div class="navbar-nav">
   <div class="dropdown  _custom_dropdown font-weight-bold">
      <a class="nav-item nav-link text-uppercase _font-size font-weight-bold mr-4" style="color:#fff" href="{{ route('frontend.itineraries') }}">Itineraries</a>
   </div>
   <div class="dropdown  _custom_dropdown font-weight-bold">
      <a class="nav-item nav-link text-uppercase _font-size font-weight-bold mr-4" style="color:#fff" href="{{ route('frontend.car_rental') }}">Car For Rent</a>
   </div>
   <div class="dropdown  _custom_dropdown font-weight-bold">
      <a class="nav-item nav-link text-uppercase _font-size font-weight-bold mr-4" style="color:#fff" href="{{ route('frontend.feedback') }}">Explore</a>
   </div>
   <div>
   <a class="nav-item nav-link text-uppercase font-weight-bold bg-white py-1 px-3 _t-gray _font-size _border-radius _inquiry _enquire-ho">ENQUIRE</a>
   </div>
</div>
</div>
</nav>
</div>