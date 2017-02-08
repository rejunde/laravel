   <div class="sidebar" data-color="blue">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
		    <div class="logo">
		    	<a href="" class="simple-text">
		    		CSORMTS
		    	</a>
		    </div>


		    <div class="sidebar-wrapper">
		    	<ul class="nav">
		    		<li class="active">
		    			<a href="{{URL::to('/administrator/dashboard')}}">
		    				<i class="material-icons">dashboard</i>
		    				<p>Dashboard</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="{{URL::to('/administrator/appusers_index')}}">
		    				<i class="material-icons">assignment_ind</i>
		    				<p>Application Users</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="{{URL::to('/administrator/request_index')}}">
		    				<i class="material-icons">content_paste</i>
		    				<p>Request</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="{{URL::to('/administrator/books_index')}}">
		    				<i class="material-icons">archive</i>
		    				<p>Books</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="{{URL::to('/administrator/budgetfund_index')}}">
		    				<i class="material-icons">monetization_on</i>
		    				<p>Budget Fund</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="{{URL::to('/administrator/reports_index')}}">
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