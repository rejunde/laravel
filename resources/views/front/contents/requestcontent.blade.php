@extends('front.front')
@section('indexcontent')
	<div class="row" style="width: 100%">			
			
			<div class="col-md-offset-1">
					<h1 style="color: black"><u>LIBRARY MATERIAL REQUEST FORM</u></h1><br>
				</div>
		
			</div>
	
	<div class="row" style="width: 100%">
		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-2">
				<label>Name of Faculty</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="facultyname" placeholder="Name of Faculty">
			</div>
			<div class="col-md-2">
				<label>Institute</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="institute" placeholder="Institute">
				<br>
			</div>
		</div>

		<div class="col-md-11 col-md-offset-1">
			<div class="col-md-2">
				<label>Phone No.</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="facultyname" placeholder="Phone No.">
			</div>
			<div class="col-md-2">
				<label>Email</label>
			</div>
			<div class="col-md-4">
				<input class="form-control" name="" type="text" id="institute" placeholder="Email"><br>
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
                                  <i class="  pull-right">3</i>
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
                                		</tr>
                                		<tbody>
                                			<tr>
                                				<td>Voet, Donald</td>
                                				<td>Fundamentals of biochemistry: life at the molecular level</td>
                                				<td>5th Edition</td>
                                				<td>c2016</td>
                                				<td>9781118918491</td>
                                				<td>Print & eBook</td>
                                				<td>Reserve Section</td>
                                				<td>January 1, 2017</td>
                                			</tr>
                                			<tr>
                                				<td>Voet, Donald</td>
                                				<td>Fundamentals of biochemistry: life at the molecular level</td>
                                				<td>5th Edition</td>
                                				<td>c2016</td>
                                				<td>9781118918491</td>
                                				<td>Print & eBook</td>
                                				<td>Reserve Section</td>
                                				<td>January 1, 2017</td>
                                			</tr>
                                			<tr>
                                				<td>Voet, Donald</td>
                                				<td>Fundamentals of biochemistry: life at the molecular level</td>
                                				<td>5th Edition</td>
                                				<td>c2016</td>
                                				<td>9781118918491</td>
                                				<td>Print & eBook</td>
                                				<td>Reserve Section</td>
                                				<td>January 1, 2017</td>
                                			</tr>
                                		</tbody>

                                	</table>
                                </div>
                              </div>
                            </div>
                          </div>

                  
                        </div><!--/#accordion1-->
                    </div>
	
		
		<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="author">Author/s   :</label>
				</div>
				<div class="col-md-4">
					<input class="form-control" name="" type="text" id="author" placeholder="Author's name">
					<br>
				</div>
				<div class="col-md-2">
					<label for="title">Title   :</label>
				</div>
				<div class="col-md-4">
					<input class="form-control" name="" type="text" id="title" placeholder="Title">
					<br>
				</div>
		</div>
	
		<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="volume">Volume/Edition   :</label>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-4">

					<input class="form-control" name="" type="text" placeholder="Volume/Edition">

				</div>
				<div class="col-md-2">
					<label for="volume">Year Published  :</label>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">

					<input class="form-control" name="" type="url" placeholder="Year Published">
					<br>
				</div>
				</div>
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="isbn">ISBN/ISSN  :</label>
				</div>
				<div class="col-md-10">
					<input class="form-control" name="" type="text" id="isbn" placeholder="ISBN/ISSN">
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
					
					<label class="checkbox-inline"><b>Book</b><input type="checkbox" name="book" ></label>

				</div>
			
				<div class="col-md-2">
					
					<label class="checkbox-inline"><b>Print</b><input type="checkbox" name="print" ></label>
				</div>
				
				<div class="col-md-2">
				
					<label class="checkbox-inline"><b>eBook</b><input type="checkbox" name="eBook" ></label>
					
				</div>
				
				<div class="col-md-2">
				
					<label class="checkbox-inline"><b>Print & eBook</b><input type="checkbox" name="printeBook" ></label>
				</div>
				</div>
				
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="isbn">Item to be placed at (Please check one)  :</label>	
					<br>	<br>
				</div>
				<div class="col-md-3">
				
					<label class="checkbox-inline"><b>Circulation Section</b><input type="checkbox" name="circulation" ></label><br>
					
				
					<label class="checkbox-inline"><b>Reference Section</b><input type="checkbox" name="reference" ></label>	
					<br>
					
				
				</div>
			
				<div class="col-md-7">
				
					<label class="checkbox-inline"><b>Reserve Section</b><input type="checkbox" name="reserve" ></label>	
					<br>
					<label class="checkbox-inline"><b>Serials Section</b><input type="checkbox" name="serial" ></label>	
					<br>
					
				</div>
				</div>
				<div class="col-md-11 col-md-offset-1">
				<div class="col-md-2">
					<label for="date">Date Needed :</label>
					<br>
				</div>
				<div class="col-md-9">
					<input class="form-control" name="" type="text" id="date" placeholder="Date Needed">
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
                            <i class="fa fa-list-alt"></i><br><h3><b>Add to list</b></h3>
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
          
		</div>
	</div>
	
@stop