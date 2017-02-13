@extends('front.front')
@section('indexcontent')
<main role="main-home-wrapper" class="container" >
	<div class="row" style="width: 100%">
		<div class="col-md-10 ">
			<div class="container">
				<div class="center">  
					<div class="col-md-5">
						<div class="input-group searchbar">
							<input type="text" id="searchdata" class="form-control has-error" placeholder="Search for..." autocomplete="off" data-url="{!!URL::to('/')!!}" required="required">

							
							<span class="input-group-btn">
								<button class="btn btn-default" id="btnsearch" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
					<div class="col-md-4 col-md-offset-1">
						<input type="text" name="" class="form-control" id="emailus" placeholder="Email us">
					</div>
				</div>  
				<div class="col-md-5">
					<span style="color: red;display: none" id="requiredsearch">
						* This field is required.
					</span>
				</div>
			</div>
			<br>
			<div class="col-md-12 col-md-offset-1">
				<div align="center" id="resultfound" style="height: 180px"></div>
				<div class="tab-wrap">

					<div align="center" style="display: none;z-index: 1000" id="loading"><img src="front/images/loading.gif"></div>    
					<div class="media" id="resultsearch" style="display: none">
						<div class="parrent pull-left">
							<ul class="nav nav-tabs nav-stacked">
								<li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web Design</a></li>
								<li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin Included</a></li>
								<li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
								<li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
								<li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
							</ul>
						</div>
						<div class="parrent media-body">
							<div class="tab-content">
								<div class="tab-pane" id="tab1">
									<div class="media">
										<div class="pull-left">
											<img class="img-responsive" src="images/tab1.png">
										</div>
										<div class="media-body">
											<h4>Adipisicing elit</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
										</div>
									</div>
								</div>

								<div class="tab-pane active in" id="tab2">
									<div class="media">
										<div class="pull-left">
											<img class="img-responsive" src="images/tab1.png">
										</div>
										<div class="media-body">
											<h4>Adipisicing elit</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
											</p>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="tab3">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
								</div>
								
								<div class="tab-pane" id="tab4">
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
								</div>

								<div class="tab-pane" id="tab5">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
								</div>
							</div> <!--/.tab-content-->  
						</div> <!--/.media-body-->  
					</div>
				</div>
			</div>
		</div>
	</div>
	
</main>

@stop