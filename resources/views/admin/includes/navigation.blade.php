		<nav class="navbar navbar-transparent navbar-absolute"  >
			<div class="container-fluid"  data-color="blue">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					@php
					$url=Request::getPathInfo();
					$segment=explode("/",$url);
					$active_url=$segment[2];
					@endphp

					@if ($active_url =='dashboard')
					<h3>Dashboard</h3>
					@elseif ($active_url =='appusers')
					<h3>Application Users</h3>
					@elseif ($active_url =='books')
					<h3>Books</h3>
					@elseif ($active_url =='request')
					<h3>Requests</h3>
					@elseif ($active_url =='budgetfund')
					<h3>Budget Fund</h3>
					@elseif ($active_url =='reports')
					<h3>Reports and Statistics</h3>
					@endif
					

				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
								<i class="material-icons">dashboard</i>
								<p class="hidden-lg hidden-md">Dashboard</p>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="material-icons">notifications</i>
								<span class="notification">5</span>
								<p class="hidden-lg hidden-md">Notifications</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Mike John responded to your email</a></li>
								<li><a href="#">You have 5 new tasks</a></li>
								<li><a href="#">You're now friend with Andrew</a></li>
								<li><a href="#">Another Notification</a></li>
								<li><a href="#">Another One</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="material-icons">person</i>
								<p class="hidden-lg hidden-md">Profile</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">View Admin Details</a></li>
								<li><a href="{{URL::to('/logout')}}">Logout</a></li>
							</ul>
						</li>
							<!-- <li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
		 					</li> -->
		 				</ul>


		 			</div>
		 		</div>
		 	</nav>
