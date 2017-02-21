@extends('front.index')
@section('indexcontent')
<main role="main-home-wrapper" class="container">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-hover" width="100%">
				<tbody>
					<tr >
						<td width="20%" style="border:none">Book Fund Balance as of <?=$var=($BookDetails[0]->bookfund_Sem == 1)? '1st Semester':'2nd Semester';?> {{$BookDetails[0]->year}}</td>
						<td width="20%" style="border:none">PHP {{number_format($BookDetails[0]->bookfund_base, 2, '.', '')}}</td>
						<td width="40%" style="border:none"></td>
					</tr>
					<tr>
						<td style="border:none">Less : Expenses (Pls. see details below)</td>
						<td style="border:none">PHP {{number_format($BookDetails[0]->bookfund_total, 2, '.', '')}}</td>
						<td style="border:none"></td>
					</tr>
					<tr>
						<td width="50%" style="border:none">Net Available Book fund as of <?=$var=($BookDetails[0]->bookfund_Sem == 1)? '1st Semester':'2nd Semester';?> {{$BookDetails[0]->year}}</td>
						<td style="border-top:1px solid">PHP {{number_format($BookDetails[0]->bookfund_rem, 2, '.', '')}}</td>
						<td style="border:none"></td>
					</tr>
				</tbody>			
			</table>
			<table class="table table-bordered table-hover text-center" width="100%" >
			<thead>
				<tr>
					<th class="text-center">
						REQUESTOR
					</th>
					<th class="text-center">
						AUTHOR / TITLE / COPYRIGHT
					</th>
					<th class="text-center">
						COST
					</th>
					<th class="text-center">
						STATUS
					</th>
				</tr>
			</thead>
			<tbody>
			<?php $name2=""?>
				@foreach($BookDetails as $key => $value)
				<?php $name =$value->faculty_fullname;

				?>
				<tr>
					<td>
					<?php
					if($name !== $name2){
						echo $value->faculty_fullname;
						$name2 = $value->faculty_fullname;
					}else{
						$name2 = $value->faculty_fullname;
						
					}
					?>				
					</td>
					<td>{{$value->bookdetails_author}}  /  {{$value->bookdetails_title}}  /  {{$value->bookdetails_volume_edition}}</td>
					<td></td>
					<td>{{$value->bookstatus}}</td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>
	
</main>

@stop