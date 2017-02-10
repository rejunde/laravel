@extends('front.front')
@section('indexcontent')
	<div class="row" style="width: 100%">	
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-11">
				<h1 style="color: black"><u>LIBRARY MATERIAL REQUEST FORM</u></h1><br>
			</div>
		</div>		
	</div>
	
	<div class="row" style="width: 100%">
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-2">
				<label>Name of Faculty</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="facultyname" placeholder="Name of Faculty" value="{{Auth::user()->getdetails()->first()->faculty_fullname}}">
			</div>
			<div class="col-md-2">
				<label>Institute</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" value="{{Auth::user()->getdetails()->first()->department_name}}" name="" type="text" id="institute" placeholder="Institute">
				<br>
			</div>
		</div>

		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-2">
				<label>Phone No.</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" value="{{Auth::user()->getdetails()->first()->faculty_contact_no}}" type="text" id="facultyname" placeholder="Phone No.">
			</div>
			<div class="col-md-2">
				<label>Email</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" value="{{Auth::user()->getdetails()->first()->email}}" type="text" id="institute" placeholder="Email"><br>
			</div>
		</div>
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-2">
				<label>Course Title</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="facultyname" placeholder="Course Title">
			</div>
			<div class="col-md-2">
				<label>Class Size</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="institute" placeholder="Class Size">
			</div>
		</div>
	</div>
		<div class="row team-bar" style="width: 100%">			
			<div class="col-md-12">
				<div class="fourth-arrow " style="width: 100%">
				<hr> 				
			</div>	
		
			</div>
		</div> 
	<div class="row" style="width: 100%">
	<div class="col-md-11 col-md-offset-1">
		 <div class="accordion">
                       
                          
                          <div class="panel panel-default">
                            <div class="panel-heading ">
                              <h3 class="panel-title">
                                <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Saved Books  
                                  <i class="  pull-right" id="count">0</i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <div class="table-responsive">
                                	<table class="table">
                                		<tr >
                                			<th style="text-align: center;width: 100px">Author/s</th>
                                			<th style="text-align: center">Title</th>
                                			<th style="text-align: center">Volume/Edition</th>
                                			<th style="text-align: center">Year Published</th>
                                			<th style="text-align: center">ISBN/ISSN</th>
                                			<th style="text-align: center">Type of Material</th>
                                			<th style="text-align: center">Item to be placed</th>
                                			<th style="text-align: center">Date Needed</th>
                                			<th style="text-align: center">Action</th>
                                		</tr>
                                		<tbody id="addbook">
                                			
                                		</tbody>

                                	</table>
                                </div>
                              </div>
                            </div>
                          </div>

                  
                        </div><!--/#accordion1-->
                    </div>
	
		
				<form class="form-horizontal" id="bookForm">
					<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="author">Author/s   :</label>
				</div>
				<div class="col-md-4">
					<input class="form-control" name="author" type="text" id="author" placeholder="Author's name">
					<br>
				</div>
				<div class="col-md-2">
					<label for="title">Title   :</label>
				</div>
				<div class="col-md-4">
					<input class="form-control" name="title" type="text" id="title" placeholder="Title">
					<br>
				</div>
		</div>
	
		<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="volume">Volume/Edition   :</label>
				</div>
				<div class="col-md-4">

					<input class="form-control" name="volume" id="volume" type="text" placeholder="Volume/Edition">

				</div>
				<div class="col-md-2">
					<label for="published">Year Published  :</label>
				</div>
				<div class="col-md-4">

					<input class="form-control" name="published" id="published" type="url" placeholder="Year Published">
					<br>
				</div>
				</div>
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="isbn">ISBN/ISSN  :</label>
				</div>
				<div class="col-md-10">
					<input class="form-control" name="isbn" type="text" id="isbn" placeholder="ISBN/ISSN">
					<br>
				</div>
				</div>
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="isbn">Type of material  :</label>	
					<br>
						<br>
				</div>
				<div class="col-md-2">					
					
					<label class="checkbox-inline"><b>Book</b><input type="checkbox" id="materialtype[]" value="Book" name="materialtype[]" ></label>

				</div>
			
				<div class="col-md-2">
					
					<label class="checkbox-inline"><b>Print</b><input type="checkbox" id="materialtype[]" value="Print" name="materialtype[]" ></label>
				</div>
				
				<div class="col-md-2">
				
					<label class="checkbox-inline"><b>eBook</b><input type="checkbox" id="materialtype[]" value="eBook" name="materialtype[]" ></label>
					
				</div>
				
				<div class="col-md-2">
				
					<label class="checkbox-inline"><b>Print & eBook</b><input type="checkbox" id="materialtype[]" value="Print & eBook" name="materialtype[]" ></label>
				</div>
				</div>
				
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="isbn">Item to be placed at (Please check one)  :</label>	
					<br>	<br>
				</div>
				<div class="col-md-3">
				
					<label class="checkbox-inline"><b>Circulation Section</b><input id="section[]" type="checkbox" name="section[]" value="Circulation Section"></label><br>
					
				
					<label class="checkbox-inline"><b>Reference Section</b><input id="section[]" type="checkbox" name="section[]" value="Reference Section"></label>	
					<br>
					
				
				</div>
			
				<div class="col-md-7">
				
					<label class="checkbox-inline"><b>Reserve Section</b><input id="section[]" type="checkbox" name="section[]" value="Reserve Section"></label>	
					<br>
					<label class="checkbox-inline"><b>Serial Section</b><input id="section[]" type="checkbox" name="section[]" value="Serial Section"></label>	
					<br>
					
				</div>
				</div>
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="date">Date Needed :</label>
					<br>
				</div>
				<div class="col-md-9">
					<input class="form-control" name="date" type="text" id="date" placeholder="Date Needed">
					<br>
				</div>
				</div>
				 <div class="col-md-11 col-md-offset-1">
                <div class="features">
                 <div class="col-md-4 col-sm-6 col wow">
                          <div class="feature-wrap" style="vertical-align: middle;">
                            <i class="fa  fa-floppy-o"></i><br><h3><b>Save Request</b></h3>
                        </div>

                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col wow">
                        <div class="feature-wrap" style="vertical-align: middle;">
                            <i class="fa fa-list-alt" id="addtolist"></i><br><h3><b>Add to list</b></h3>
                        </div>

                    </div><!--/.col-md-4-->


                   
                    <div class="col-md-4 col-sm-6  wow" >
                        <div class="feature-wrap">
                            <i class="fa fa-envelope-o"></i><br>
                            <h3><b>Send Email</b></h3>
                           
                        </div>
                    </div><!--/.col-md-4-->
                
                   
                </div><!--/.services-->
                </div>
				</form>
          
		</div>
	</div>
	
@stop