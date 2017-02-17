@extends('admin.index')
@section('admincontent')
<style type="text/css">
  .tt-query,.typeahead,
  .tt-hint {
    width: 100% !important;


    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    outline: none;
  }

  .typeahead {
    background-color: #fff;
  }


  .tt-query {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  }

  .tt-hint {
    color: #999
  }

  .tt-menu { /* UPDATE: newer versions use tt-menu instead of tt-dropdown-menu */
    width: 422px;
    margin-top: 12px;
    padding: 8px 0;
    background-color: #fff;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0,0,0,.2);
  }


  .tt-suggestion {
    padding: 3px 20px;
    font-size: 18px;
    line-height: 24px;
  }

  .tt-suggestion.tt-is-under-cursor {
    color: #fff;
    background-color: #0097cf;
  }

  .tt-suggestion p {
    margin: 0;
  }

  /** Added from this point */
  .twitter-typeahead{
   width: 97%;
 }
 .tt-dropdown-menu{
  width: 102%;
}
input.typeahead.tt-query{ /* This is optional */
  width: 300px !important;
}
</style>

    <ul class="nav nav-tabs">
      <li><a href="{{URL::to('/administrator/request/request_index')}}">Active Request</a></li>
      <li class="active"><a href="{{URL::to('/administrator/request/add_request')}}">Add Request</a></li>
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
            <div class="card-header" data-background-color="green">
              <h4 class="title">Add New Request</h4>
              <p class="category">Requestor Details</p>
            </div>
            <div class="card-content">
              <form>
                <input type="hidden" id="csrf" value="{{ csrf_token() }}">
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group label-floating" >
                      <label class="control-label">Name of Faculty:</label>
                      <input type="text" id="faculty_name" name="faculty_name" class="form-control typeahead" >
                      <input type="hidden" name="faculty_id" id="faculty_id" value="">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group label-floating">
                      <label class="control-label">Institute</label>
                      <select id="institute_id" name="institute_id" class="form-control">
                        <option value=""></option>
                        @foreach($department as $key => $value)
                        <option value="{{$key}}">{{$value->department_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group label-floating">
                      <label class="control-label">Email address</label>
                      <input id="faculty_email" name="faculty_email" type="email" class="form-control" >
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group label-floating">
                      <label class="control-label">Phone Number</label>
                      <input type="text" id="faculty_phone" name="faculty_phone" class="form-control" >
                    </div>
                  </div>                
                </div>

                <div class="row">
                  <div class="col-md-12" align="center">
                   <h4 class="text-success"><--- Material Details ---></h4>
                 </div>                
               </div>

               <div class="row">
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Title</label>
                    <input type="text" id="bookdetails_title" name="bookdetails_title" class="form-control" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group label-floating">
                    <label class="control-label">Author/s</label>
                    <input type="text" id="bookdetails_author" name="bookdetails_author" class="form-control" >
                  </div>
                </div>                
              </div>

              <div class="row">
                <div class="col-md-5">
                  <div class="form-group label-floating">
                    <label class="control-label">Volume/Edition</label>
                    <input type="text" id="bookdetails_volume_edition" name="bookdetails_volume_edition" class="form-control" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Publisher</label>
                    <input type="text" id="bookdetails_publisher" name="bookdetails_publisher" class="form-control" >
                  </div>
                </div>  
                <div class="col-md-3">
                  <div class="form-group label-floating">
                    <label class="control-label">Year Published</label>
                    <input type="text" id="bookdetails_year_published" name="bookdetails_year_published" class="form-control" >
                  </div>
                </div>                                
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">ISBN/ISSN</label>
                    <input type="text" id="bookdetails_isbn_issn" name="bookdetails_isbn_issn" class="form-control" >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Type Material</label>
                    <select id="book_type" name="book_type" class="form-control">
                      <option value=""></option>
                      <option value="Book">Book</option>
                      <option value="Journal">Journal</option>
                    </select>
                  </div>
                </div>  
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Medium</label>
                    <select id="book_medium" name="book_medium" class="form-control">
                      <option value=""></option>
                      <option value="Print">Print</option>
                      <option value="eBook">eBook</option>
                      <option value="Online">Online</option>
                      <option value="DVD">DVD</option>
                      <option value="Print and eBook">Print and eBook</option>
                      <option value="Print and Online">Print and Online</option>
                    </select>
                  </div>
                </div>                                
              </div>

              <div class="row" align="center">
                <div class="col-md-12">
                  <input type="button" class="btn btn-info" id="add_to_list" value="ADD TO LIST">
                </div>                                                       
              </div>

              <div class="col-md-12">
                <div class="card">

                  <div class="card-content table-responsive">
                  <table class="table" id="tableBook">
                      <thead class="text-primary">
                        <th style="text-align:center;">Book Title</th>
                        <th style="text-align:center;">Author</th>
                        <th style="text-align:center;">Volume / Edition</th>
                        <th style="text-align:center;">Publisher</th>
                        <th style="text-align:center;">Year Published</th>
                        <th style="text-align:center;">ISBN / ISSN</th>
                        <th style="text-align:center;">Material Type</th>
                        <th style="text-align:center;">&nbsp;</th>
                      </thead>
                      <tbody id="list">

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


              <button type="button" id="submit_request" class="btn btn-primary pull-right">Save Request</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>


      </div>

    </div>

@stop
