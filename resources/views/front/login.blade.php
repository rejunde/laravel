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
    width: 100%;
    height: auto;
    background-image: url('frontimage/logo4.png');
    background-repeat: no-repeat;
    background-size: contain;
}
  </style>
</head>

<body >
<!-- <?php
$input = preg_quote('bl', '~'); // don't forget to quote input string!
$data = array('orange', 'blue', 'green', 'red', 'pink', 'brown', 'black');

$result = preg_grep('~' . $input . '~', $data);
var_dump( $result);
?> -->

    
    <div class="wrapper" >     

            <div class="content" >
                <header role="header">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-3">
                          
                   
                      <span> 
                        <h1 style="color: #FB5350;font-size: 48px">College of Science Library </h1>
                        <h3>Library Resource Material Tracking System</h3>    
                    </span>
               
                       </div>
                   </div>
            </header>
                <div class="container-fluid" >
                    <div class="row" >

                        <div class="col-md-10 col-md-offset-1" style="background-color: white">
                        <div class="col-md-7" style="background-color: #EDEDE8; ">
                          
                              <ul class="pgwSlideshow" >
   
    <li><img src="frontimage/logo.png" ></li>
    <li><img src="frontimage/logo1.jpg" alt="" ></li>
    <li><img src="frontimage/logo2.png" alt=""></li>
    <li><img src="frontimage/logo3.png" alt=""></li>
    <li><img src="frontimage/logo4.png" alt=""></li>
 
</ul>
                        </div>
                         <div class="col-md-5 "  style="background-color: #EDEDE8  ">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <span>College of Science Library | Library Resource Material Tracking System</span>
                                    <p class="category">Please Login to continue</p>
                                </div>
                                <div class="card-content">
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
                    </div>
                    <footer class="footer">
                                <div class="container-fluid" >
                                <p class="copyright pull-right " style="color: white">
                                        &copy; <script>document.write(new Date().getFullYear())</script> College of Science Library | Library Resource Material Tracking System 
                                    </p>
                                </div>
                            </footer>

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
        autoSlide : 'true',
        maxHeight : '341',
        displayControls : 'false',


    });
});
</script>


</html>
