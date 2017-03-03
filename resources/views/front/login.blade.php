<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link href="{!! asset('adminassets/img/apple-icon.png') !!}" rel="apple-touch-icon" sizes="76x76" />
    <link href="{!! asset('adminassets/img/favicon.png') !!}" rel="icon" type="image/png" />
    <link href="{{ asset('front/PgwSlideshow-master/pgwslideshow.css') }}" rel="stylesheet" type="text/css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>College of Science Library | Library Resource Material Tracking System</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('admin.includes.header')
    <style type="text/css">
      body {
        width: 98%;
        height: 100%;
        background-image: url('front/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

</style>
</head>

<body style="background-color: white">


    <div class="wrapper" >     
        <div class="content" >
            <header role="header">
             <div class="row header">
                 <div class="col-md-2 ">
                     <img src="frontimage/logo5.png" height="170" >
                 </div>
                 <div class="col-md-6 col-md-offset-1" style="vertical-align: text-bottom;">



                    <h1 style="color: white;font-size: 48px;font-weight:bold" >College of Science Library </h1>
                    <h3 style="color: white;font-size: 28px;font-weight:bold;vertical-align: bottom;">Library Resource Material Tracking System</h3>    


                </div>
            </div>
        </header>
        <div class="container-fluid" >
            <div class="row" >

                <div class="col-md-10 col-md-offset-1" style="background-color: white;height: 450px;padding-top:36px;border: 1px solid #AAAAAD;">
                <div  class="col-md-12 " style="background-color: #EDEDE8;border: 1px solid #AAAAAD;">

                    <div class="col-md-7" >
                        <br>

                        <div class="slides" style="padding-bottom: 20px">
                            <ul class="pgwSlideshow">
                                <li><img src="frontimage/book/1.jpg" alt="San Francisco, USA" data-description="Golden Gate Bridge"></li>
                                <li><img src="frontimage/book/2.png" data-description="Golden Gate Bridge"></li>
                                <li><img src="frontimage/book/3.jpg" alt="" data-description="Golden Gate Bridge"></li>
                                <li><img src="frontimage/book/4.jpg" alt="" data-description="Golden Gate Bridge"></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5"  >
                        <div class="card">
                              @if(session()->has('sesserror'))
                            <div class="card-header" data-background-color="red">
                                <span>Login</span>
                                <p class="category">{!! 
                    session('sesserror')['msg'] !!}</p>
                            </div>
                       
                            @else
                            <div class="card-header" data-background-color="orange">
                                <span>Login</span>
                                <p class="category">Please Login to continue</p>
                            </div>
                            @endif
                            <div class="card-content" >
                                {!! Form::open(['url' => '/login']) !!}

                                <div class="row">
                                    <div class="col-md-8 col-sm-offset-2">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email/Username</label>
                                            <input type="text" class="form-control" name="user_email">
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-8 col-sm-offset-2">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control" name="user_password">
                                        </div>
                                    </div>
                                </div>



                                <button type="submit" data-background-color="blue" class="btn btn-primary pull-right">Login</button>
                                <div class="clearfix"></div>
                                {!! Form::close() !!}

                            </div>
                        </div>


                    </div>
                    </div>

            	  <div class="col-md-10 col-md-offset-1" >
            	  <div class="col-md-3" >
            	  	
            		<img  src="frontimage/1.png" class="img-responsive">
            		
            	  </div>
            	  <div class="col-md-3">
            	  	<img  src="frontimage/2.png" class="img-responsive">
            		
            	  </div>
            	  <div class="col-md-3">
            	  	<img  src="frontimage/3.png" class="img-responsive">
            		
            	  </div>
            	  <div class="col-md-3">
            	  	<img   src="frontimage/4.png"  height="115px">
            	  </div>
                	
                </div>
                </div>
              
            </div>
         

            <!--   Core JS Files   -->
            <script type="text/javascript" src="{!! asset('adminassets/js/jquery-3.1.0.min.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/bootstrap.min.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/material.min.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/chartist.min.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/bootstrap-notify.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/material-dashboard.js') !!}"></script>
            <script type="text/javascript" src="{!! asset('adminassets/js/demo.js') !!}"></script>
            <script src="{{asset('front/PgwSlideshow-master/pgwslideshow.js')}}"></script>
        </div>

    </div>
</div>



</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('.pgwSlideshow').pgwSlideshow({
           maxHeight : 450,
           maxHeight : 450,
           autoSlide : true,
           displayControls : false,
           displayList :false,

       });
    });
</script>


</html>
