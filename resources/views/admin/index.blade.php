<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link href="{!! asset('adminassets/img/apple-icon.png') !!}" rel="apple-touch-icon" sizes="76x76" />
	<link href="{!! asset('adminassets/img/favicon.png') !!}" rel="icon" type="image/png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>UP College of Science ORMTS</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	@include('admin.includes.header')
</head>

<body>

	<div class="wrapper">
	 @include('admin.includes.sidebar')
	    <div class="main-panel">
			 @include('admin.includes.navigation')

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                @yield('admincontent')
	                </div>
	            </div>
	        </div>
			@include('admin.includes.footer')
	    </div>
	</div>

</body>

	


</html>
