@extends('admin.index')
@section('admincontent')

<ul class="nav nav-tabs">
 <input type="hidden" id="csrf" value="{{ csrf_token() }}">
 <li class='active'><a href="{{URL::to('/administrator/budgetfund/budgetfund_index')}}">Current Budget Fund</a></li>
  <li class=''><a href="{{URL::to('/administrator/budgetfund/budgetfund_add')}}">Add Budget Fund</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dealer Users
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::to('/administrator/appusers/appusers_dealer')}}">View All Dealer Users</a></li>
      <li><a href="{{URL::to('/administrator/appusers/appusers_add_dealer')}}">Add New Dealer User</a></li>
    </ul>
  </li>    
  </ul>
@stop
