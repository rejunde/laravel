@extends('front.index')
@section('indexcontent')
<main role="main-home-wrapper" class="container">

    <h1 style="color: black">Edit Profile</h1>
  	<hr>
	<div class="row">
      <div class="col-md-12 personal-info">
      	@if (count($errors) > 0)
      	<div class="alert alert-danger">
      		<ul>
      			@foreach ($errors->all() as $error)
      			<li>{{ $error }}</li>
      			@endforeach
      		</ul>
      	</div>
      	@endif
        {!! Form::open(['url' => 'dealer/updateprofile', 'class' => 'form-horizontal','method'=>'POST']) !!}

          <div class="">
            <label class="col-lg-3 control-label">Company name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="dealer_name"  type="text" value="{{Auth::user()->getdetailsdealer()->first()->dealer_name}}">
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-lg-3 control-label">Dealer Contact Person:</label>
            <div class="col-lg-8">
              <input class="form-control" name="dealer_contact_fullname"  type="text" value="{{Auth::user()->getdetailsdealer()->first()->dealer_contact_fullname}}">
            	<br>
            </div>
          </div>
            <div class="">
            <label class="col-lg-3 control-label">Dealer Contact Number:</label>
            <div class="col-lg-8">
              <input class="form-control" name="dealer_contact_no"  type="text" value="{{Auth::user()->getdetailsdealer()->first()->dealer_contact_no}}">
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-lg-3 control-label">Dealer Contact Address:</label>
            <div class="col-lg-8">
              <textarea class="form-control" name="dealer_address"  cols="5" rows="5">{{Auth::user()->getdetailsdealer()->first()->dealer_address}}</textarea> 
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email"  type="text" value="{{Auth::user()->email}}" readonly="readonly">
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password"  type="password" >
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password1"  type="password" >
            	<br>
            </div>
          </div>
          <div class="">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8 ">
              <input type="submit" class="btn btn-info" value="Save Changes">
              	<span></span>
              <input type="reset" class="btn btn-default" value="Reset">
            </div>
          </div>
        {!! Form::close() !!}
      </div>
  </div>

<hr>
		
	
</main>
<script type="text/javascript">
	 @if(session()->has('success'))
	swal({
  title: "<br><br>Successful<br>",
  text: "Your account is updated.<br>",
  type: "success",
  html:true,
  showCancelButton: false,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Ok",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
   window.location.href = {!! json_encode(url('/dealer')) !!};
  } 
});
	 @endif
</script>
@stop