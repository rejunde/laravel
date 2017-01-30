<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link href="{!! asset('adminassets/img/apple-icon.png') !!}" rel="apple-touch-icon" sizes="76x76" />
	<link href="{!! asset('adminassets/img/favicon.png') !!}" rel="icon" type="image/png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	@include('admin.includes.header')
	<style type="text/css">
		.wrapper {
	margin-top: 15%;
}
	</style>
</head>

<body>

	<div class="wrapper" >
	
		

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	           			 <div class="col-md-8 col-md-offset-2">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <span>College of Science Library | Library Resource Material Tracking System</span>
									<p class="category">Please Login to continue</p>
	                            </div>
	                            <div class="card-content">
	                                {!! Form::open(['url' => '/login']) !!}
	                               

	                                    <div class="row">
	                                        <div class="col-md-8 col-sm-offset-2">
												<div class="form-group label-floating">
													<label class="control-label">Email/Username</label>
													<input type="text" class="form-control" >
												</div>
	                                        </div>
	                                    
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-8 col-sm-offset-2">
												<div class="form-group label-floating">
													<label class="control-label">Password</label>
													<input type="password" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    

	                                    <button type="submit" class="btn btn-primary pull-right">Login</button>
	                                    <div class="clearfix"></div>
	                               {!! Form::close() !!}
	                            </div>
	                        </div>
	                          @include('admin.includes.footer')
	                    </div>

	                </div>
	            </div>

	        </div>
			
	  
	</div>

</body>

	


</html>
