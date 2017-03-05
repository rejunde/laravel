@extends('admin.index')
@section('admincontent')

<ul class="nav nav-tabs">
 <input type="hidden" id="csrf" value="{{ csrf_token() }}">
 <li class="dropdown ">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Users
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::to('/administrator/appusers/appusers_index')}}">View All Admin Users</a></li>
      <li><a href="{{URL::to('/administrator/appusers/appusers_add_faculty')}}">Add New Admin User</a></li>
    </ul>
  </li>
  <li class="dropdown active">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty Users
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{{URL::to('/administrator/appusers/appusers_index')}}">View All Faculty Users</a></li>
        <li><a href="{{URL::to('/administrator/appusers/appusers_add_admin')}}">Add New Faculty User</a></li>
      </ul>
    </li>
    <li class="dropdown ">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dealer Users
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{URL::to('/administrator/appusers/appusers_dealer')}}">View All Dealer Users</a></li>
          <li><a href="{{URL::to('/administrator/appusers/appusers_add_dealer')}}">Add New Dealer User</a></li>
        </ul>
      </li>    
    </ul>


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header" data-background-color="green">
            <h4 class="title">Add Faculty Users</h4>
            <!-- <p class="category">Update Materials Location </p> -->
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group label-floating" >
                  <label class="control-label">Faculty Fullname</label>
                  <input type="text" id="full_name" name="full_name" class="form-control" >
                </div>
              </div>
               <div class="col-md-4">
                <div class="form-group label-floating">
                  <label class="control-label">Email address</label>
                  <input id="email" name="email" type="email" class="form-control" >
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group label-floating">
                  <label class="control-label">Institute</label>
                  <select id="institute_id" name="institute_id" class="form-control">
                    <option value=""></option>
                    @foreach($department as $key => $value)
                    <option value="{{$value->department_id}}">{{$value->department_name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group label-floating" >
                  <label class="control-label">Password</label>
                  <input type="text" id="password" name="password" class="form-control" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group label-floating">
                  <label class="control-label">Re-type Password</label>
                  <input type="text" id="re_password" name="re_password" class="form-control" >
                </div>
              </div>          
            </div>
            <button type="button" id="save_faculty_user" class="btn btn-primary pull-right">Save User</button>
            <div class="clearfix"></div>

          </div>
        </div>
      </div>
    </div>


    @stop