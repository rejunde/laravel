@extends('front.index')
@section('indexcontent')
<main role="main-home-wrapper" class="container">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<a href="url('/dealer')">Home</a>/<a href="">For Quotation</a><br><br>
					<a href="url('/dealer')"> <img src="frontimage/frontquotation.png" width="130"  style="height: 70px" alt="" class="img-responsive"/></a><br>

					<a href="" data-toggle="collapse">For Quotation</a><br>
					<a href="" data-toggle="collapse">Book Dealers form</a>

				</div>

				<div class="col-md-8">					
					<table class="table table-hover" >
						<thead>
							<tr>
								<th colspan="10" >
									College of Science, University of the Philippines Diliman - Academic Year <font id="getYear">{{$school_year->year}}</font>

								</th>
							</tr>
						</thead>
						<tbody>
							<?php $number = count($batch);?>
							@foreach($batch as $key => $value)							
							<tr>
								<td  data-toggle="collapse" data-target="#batch{{$key+1}}">
									{{$key+1}}
								</td>
								
								
								<td colspan="2"  data-toggle="collapse" data-target="#batch{{$key+1}}">

									<?php
									$formatter = new NumberFormatter('en_US', NumberFormatter::SPELLOUT);
									$formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET,
										"%spellout-ordinal");
										?>
										{{ucwords($formatter->format($number) . PHP_EOL)}} Batch of Request
										<div id="batch{{$key+1}}" class="collapse">
										<font color="red">From {{$value->department_name}}</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{url('/details/' . $value->materialrequest_id)}}" class="btn btn-info btn-xs">See Details</a>

										</div>
									</td>
								</tr>
								<?php $number--;?>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</main>

	@stop