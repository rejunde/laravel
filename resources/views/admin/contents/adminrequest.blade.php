@extends('admin.index')
@section('admincontent')
<ul class="nav nav-tabs">
  <li class="active"><a href="{{URL::to('/administrator/request/request_index')}}">Active Request</a></li>
  <li><a href="{{URL::to('/administrator/request/add_request')}}">Add Request</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
  
  <li><a href="#">Menu 3</a></li>
</ul>
@stop