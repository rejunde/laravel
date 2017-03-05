@extends('admin.index')
@section('admincontent')

<ul class="nav nav-tabs">
 <input type="hidden" id="csrf" value="{{ csrf_token() }}">
 <li class=''><a href="{{URL::to('/administrator/budgetfund/budgetfund_index')}}">Current Budget Fund</a></li>
 <li class='active'><a href="{{URL::to('/administrator/budgetfund/budgetfund_add')}}">Add Budget Fund</a></li>
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
      <div class="card-header" data-background-color="green">
        <h4 class="title">Add Budget Fund</h4>
        <!-- <p class="category"></p> -->
      </div>
      <div class="card-content">     
        <div class="col-md-6">
         <div class="form-group label-floating">
          <label class="control-label">Choose Institue</label>
          <select id="institute_id_budget" name="institute_id_budget" class="form-control">
            <option value=""></option>
            @foreach($department as $key => $value)
            <option value="{{$value->department_id}}">{{$value->department_name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div id='result_institute_budget' style="display:none"> 
       <table id="budget_fund_institute_tables" class="ui celled table" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>School Year</th>
            <th>Base Added Fund</th>
            <th>Total Fund</th>
            <th>Remaining Fund</th>
            <th>Date Added</th>
            <th>Last Update Date</th>
            <th></th>
          </tr>
        </thead>
        <tbody id="tbody_budget">

        </tbody>
      </table>
      <br>
      <div align="center">
      <input type="button" id="addbudget_modal" class="btn btn-info" value="Add Budget Fund">
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
  <div id="budgetmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
       <div class="card">
        <div class="card-header" data-background-color="green">
          <h4 class="title">Add Budget Fund</h4>
          <!-- <p class="category">Update Materials Location </p> -->
        </div>
        <div class="modal-body">
            <input type="text" class="form-control" id="active_SY" value="{{$school_year[0]->year}}" readonly>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="add_budget">Add</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
