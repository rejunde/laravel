   <div class="sidebar" data-color="blue">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
		     @php
		    $url=Request::getPathInfo();
		    $segment=explode("/",$url);
		    $active_url=$segment[2];
		    @endphp
		  
		    <div class="logo" align="center">
		    	<img src="{{ ($active_url == 'dashboard' ? '../frontimage/logo5.PNG' : '../../frontimage/logo5.PNG') }}" style="width:130px;height:80px;">
		    	<br>
		    	<span><strong>CS Library Resource Material</strong></span>
		    	<br>
		    	<span><strong>Tracking System</strong></span>
		    </div>
		   
		    <div class="sidebar-wrapper">
		    	<ul class="nav">
		    		<li class="{{ ($active_url == 'dashboard' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/dashboard')}}">
		    				<i class="material-icons">dashboard</i>
		    				<p>Dashboard</p>
		    			</a>
		    		</li>
		    		<li class="{{ ($active_url == 'appusers' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/appusers/appusers_index')}}">
		    				<i class="material-icons">assignment_ind</i>
		    				<p>Application Users</p>
		    			</a>
		    		</li>
		    		<li class="{{ ($active_url == 'request' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/request/request_index')}}">
		    				<i class="material-icons">content_paste</i>
		    				<p>Request</p>
		    			</a>
		    		</li>
		    		<li class="{{ ($active_url == 'books' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/books/books_index')}}">
		    				<i class="material-icons">archive</i>
		    				<p>Quotations</p>
		    			</a>
		    		</li>
		    		<li class="{{ ($active_url == 'budgetfund' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/budgetfund/budgetfund_index')}}">
		    				<i class="material-icons">monetization_on</i>
		    				<p>Budget Fund</p>
		    			</a>
		    		</li>
		    		<li class="{{ ($active_url == 'reports' ? 'active' : '') }}">
		    			<a href="{{URL::to('/administrator/reports/reports_index')}}">
		    				<i class="material-icons">assessment</i>
		    				<p>Reports and Statistics</p>
		    			</a>
		    		</li>
		    	<!-- 	<li>
		    			<a href="{{URL::to('/administrator')}}">
		    				<i class="material-icons">content_paste</i>
		    				<p>Blank</p>
		    			</a>
		    		</li> -->

		    	</ul>
		    </div>
		</div>