@extends('front.index')
@section('indexcontent')
<main role="main-home-wrapper" class="container">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<a href="">Home</a>/<a href="">Book Fund</a><br><br>
					<a href="{{url('bookfund')}}"> <img src="frontimage/bookfund.png" width="130"  style="border: 1px solid blue;height: 70px" alt="" class="img-responsive"/></a><br>

					<a href="#years" data-toggle="collapse">Academic Year {{$school_year[0]->year}}</a>
					<div id="years" class="collapse" >
					@foreach($school_year as $key => $value)
					@if($key != 0)
					<i class="fa fa-folder-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="" id="{{$value->year_id}}" onclick="getYear(this.id,event)">{{$value->year}}</a>
					<br>
					@endif
					@endforeach
					</div>

				</div>
			
				<div class="col-md-8">
					<input type="hidden" name="year" id="year" value="{{$school_year[0]->year_id}}">
					<table class="table table-hover" >
						<thead>
							<tr>
								<th colspan="10" >
									College of Science, University of the Philippines Diliman - Academic Year <font id="getYear">{{$school_year[0]->year}}</font>

								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($department as $key => $value)
							<tr>
								<td  data-toggle="collapse" data-target="#div{{$key+1}}">
									{{$key+1}}
								</td>
								<td  data-toggle="collapse" data-target="#div{{$key+1}}" class="getdata">
									{{ Form::hidden('id', $value->department_id, array('class' => 'form-control','id'=>'department_id')) }}
									{{$value->department_name}}

									<div id="div{{$key+1}}" class="collapse">

									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</main>

@stop