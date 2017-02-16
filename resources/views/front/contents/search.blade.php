@extends('front.front')
@section('indexcontent')
	<div class="row" style="width: 100%">
	<div class="col-md-12 ">

			<div class="col-md-10">
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
			</div>
			<br>

			 <div class="col-md-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel listcheckactive" style="display: flex">
            @foreach($steps as $step)
                <li class="disabled" style="display: flex;flex: 1"  id="{{$step['booksteps_position']}}"><a style="flex: 1"  href="#step-{{$step['booksteps_position']}}">	
                    <h4 class="list-group-item-heading">Step {{$step['booksteps_position']}}</h4>
                    <p class="list-group-item-text"><span  style="font-weight: bold;font-size: 11px">{{$step['booksteps_header']}}</span></p>
                    <p class="list-group-item-text"><span style="font-weight: normal;font-size: 11px"><?=$step['boksteps_details_1']?></span><br><span style="font-weight: normal;font-size: 11px"><?=$step['boksteps_details_2']?></span></p>
                </a></li>
             @endforeach
            </ul>
        </div>
	</div>
</div>
<main role="main-home-wrapper" class="container" >

	<div class="row" >

  
    
   
    
			<div class="col-md-10 col-md-offset-1">
				<div align="center" id="resultfound" style="height: 180px"></div>
				<div class="tab-wrap">

					<div align="center" style="display: none;z-index: 1000" id="loading"><img src="front/images/loading.gif"></div>    
					<div class="media" id="resultsearch" style="">
						<div class="parrent pull-left">
							<ul class="nav nav-tabs nav-stacked searchresult">
								
							</ul>
						</div>
						<div class="parrent media-body">
							<div class="tab-content">
								
							</div> <!--/.tab-content-->  
						</div> <!--/.media-body-->  
					</div>
				</div>
			</div>
		</div>
	</div>
	
</main>

@stop