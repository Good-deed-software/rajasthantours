<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header" style="color:#fff;"> MAIN MENU <i class="fa fa-level-down"></i></li>  
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{ route('home') }}" title="Dashboard"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
			</li>
			
			@if(Request::segment(1) === 'profile')

			<li class="{{ Request::segment(1) === 'profile' ? 'active' : null }}">
				<a href="{{ route('profile') }}" title="Profile"><i class="fa fa-user"></i> <span> PROFILE</span></a>
			</li>

			@endif
			<li class="treeview 
				{{ Request::segment(1) === 'config' ? 'active menu-open' : null }}
				{{ Request::segment(1) === 'user' ? 'active menu-open' : null }}
				{{ Request::segment(1) === 'role' ? 'active menu-open' : null }}
				">
				<a href="#">
					<i class="fa fa-gear"></i>
					<span>SETTINGS</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					@if (Auth::user()->can('root-dev', ''))
						<li class="{{ Request::segment(1) === 'config' && Request::segment(2) === null ? 'active' : null }}">
							<a href="{{ route('config') }}" title="App Config">
								<i class="fa fa-gear"></i> <span> Settings App</span>
							</a>
						</li>
					@endif					
					<li class="
						{{ Request::segment(1) === 'user' ? 'active' : null }}
						{{ Request::segment(1) === 'role' ? 'active' : null }}
						">
						<a href="{{ route('user') }}" title="Users">
							<i class="fa fa-user"></i> <span> Users</span>
						</a>
					</li>
				</ul>
			</li> 
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('slider')}}" title="Slider"><i class="fa fa-sliders"></i> <span>Main Slider</span></a>
			</li> 
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('testimonial')}}" title="Testimonial"><i class="fa fa-quote-right"></i> <span>Testimonial</span></a>
			</li>  
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('tour')}}" title="Tour"><i class="fa fa-tripadvisor"></i> <span>Tour</span></a>
			</li> 
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('car')}}" title="Cars"><i class="fa fa-car"></i> <span>Rental Cars</span></a>
			</li>
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('feedback')}}" title="Feedback"><i class="fa fa-comments-o"></i> <span>Explore</span></a>
			</li> 
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('details')}}" title="Feedback Detail"><i class="fa fa-info-circle"></i> <span>Explore Detail</span></a>
			</li>
			<li class="
						{{ Request::segment(1) === null ? 'active' : null }}
						{{ Request::segment(1) === 'home' ? 'active' : null }}
					  ">
				<a href="{{route('itineraries_details')}}" title="Itineraries Detail"><i class="fa fa-info-circle"></i> <span>Itineraries Detail</span></a>
			</li> 
		</ul>
	</section>
</aside>