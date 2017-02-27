@extends('front.index')
@section('indexcontent')
<style type="text/css">
	.table th {
		text-align: center;
	}
</style>
<main role="main-home-wrapper" class="container">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			<table class="table  table-hover text-center" width="100%" >
				<thead>
					<tr>
						<th>Author/Editor</th>
						<th>Title</th>
						<th>Edition / Year Published</th>
						<th>Publisher</th>
						<th>ISBN</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $key => $value)
					<tr>
						<td>{{$value->bookdetails_author}}</td>
						<td>{{$value->bookdetails_title}}</td>
						<td>{{$value->bookdetails_year_published}}</td>
						<td>{{$value->bookdetails_publisher}}</td>
						<td>{{$value->bookdetails_isbn_issn}}</td>
						<td><input type="text" class="form-control" name=""></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
		<div class="col-md-12 ">
		<button class="btn btn-lg btn-success pull-right" id="savePrice">Save</button>
		</div>		
	</div>
	<br>
</main>

@stop