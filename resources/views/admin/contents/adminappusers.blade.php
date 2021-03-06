@extends('admin.index')
@section('admincontent')

<ul class="nav nav-tabs">
 <input type="hidden" id="csrf" value="{{ csrf_token() }}">
 <li class="dropdown active">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Users
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::to('/administrator/appusers/appusers_index')}}">View All Admin Users</a></li>
      <li><a href="{{URL::to('/administrator/appusers/appusers_add_admin')}}">Add New Admin User</a></li>
     </ul>
  </li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculty Users
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::to('/administrator/appusers/appusers_faculty')}}">View All Faculty Users</a></li>
      <li><a href="{{URL::to('/administrator/appusers/appusers_add_faculty')}}">Add New Faculty User</a></li>
    </ul>
  </li>
  <li class="dropdown">
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
        <div class="card-header" data-background-color="orange">
          <h4 class="title">Admin Users</h4>
          <!-- <p class="category">Update Materials Location </p> -->
        </div>
        <div class="card-content">
           <table id="example" class="ui celled table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Date Created</th>
                <th>Last Login</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($admins as $admin)
            <tr>
            <td>{{$admin->user_id}}</td>
            <td>{{$admin->adminuser_fullname}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->adminuser_contactnumber}}</td>
            <td>{{$admin->user_datecreated}}</td>
            <td>{{$admin->user_last_login}}</td>
            <td></td>

            @endforeach            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@stop