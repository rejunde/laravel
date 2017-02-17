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
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header" data-background-color="orange">
          <h4 class="title">Tracking of Materials</h4>
          <p class="category">Update Materials Location </p>
        </div>
        <div class="card-content">
          <input type="hidden" id="csrf" value="{{ csrf_token() }}">
          <table id="example" class="ui celled table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Requestor</th>
                <th>Department</th>
                <th>Date Processed</th>
                <th>Location</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $book)
              <tr>
                <td>{{$book->bookdetails_title}}</td>
                <td>{{$book->bookdetails_author}}</td>
                <td>{{$book->faculty_fullname}}</td>
                <td>{{$book->department_name}}</td>
                <td>{{$book->materialrequest_date_requested}}</td>
                <td>{{$book->booksteps_header}}</td>
                <td><input type="hidden" value="{{$book->bookdetails_id}}" class="for_edit"> <input type="button" name="editbook" value="Edit Book" class="btn btn-primary btn-xs mymodal"></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="bookmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">


      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" data-background-color="orange">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Book Details</strong></h4>
        </div>
        <div class="modal-body">

          <div id="modal_book_details" style="color:black;">
            <strong>Title:  </strong><span id="mod_title"></span>
            </br> 
            <strong>Author:  </strong><span id="mod_author"></span>
            </br> 
            <strong>Publisher:  </strong><span id="mod_pub"></span>
            </br>
            <strong>Year Published:  </strong><span id="mod_ypub"></span>
            </br>
            <strong>ISBN/ISSN: </strong><span id="mod_isbn"> </span>
            </br>
            <strong>Volume: </strong><span id="mod_vol"> </span>
            </br>
            <strong>Type:  </strong><span id="mod_type"></span>
            </br>
            </br>
            <strong>Requestor:  </strong><span id="mod_requestor"></span>
            </br>
            <strong>Institute:  </strong><span id="mod_institute"></span>
            </br>
            <strong>Contact No:  </strong><span id="mod_contact"></span>
            </br>
            <strong>Processed:  </strong><span id="mod_processed"></span>
            </br>
            </br>
            <strong>Current Location:  </strong>Step <span id="mod_current"></span>
            </br>
            <input type="hidden" id="mod_bookid" value="">
            <strong>Remarks</strong>
            <textarea style="margin-top:0px!important; padding-top:0px!important;" class="form-control" rows="3" id="mod_remarks"></textarea>
            <strong>Change Steps</strong>
            <select style="margin-top:0px!important; padding-top:0px!important;" id='opt_steps' class="form-control">
            @foreach($steps as $step)
            <option value="{{$step->booksteps_id}}">STEP {{$step->booksteps_position}} - {{$step->booksteps_header}}</option>
            @endforeach
            </select>
           

          </div>
          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" id="update_book">Update</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  @stop