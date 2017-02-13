

$('#example').DataTable();


$('#add_to_list').on('click',function(){
	var title = $('#bookdetails_title').val();
	var author = $('#bookdetails_author').val();
	var volume_edition = $('#bookdetails_volume_edition').val();
	var publisher = $('#bookdetails_publisher').val();
	var year_published = $('#bookdetails_year_published').val();
	var isbn_issn = $('#bookdetails_isbn_issn').val();
	var book_type = $('#book_type').val();
	var book_medium = $('#book_medium').val();
	if(title ==''||author ==''||volume_edition ==''||publisher==''||year_published ==''||isbn_issn ==''||book_type ==''||book_medium =='')
	{
		Prevent('Please fill up all book details');
	}
	else
	{
		Success('Book Added');
		$('#list').append('<tr>\
			<td style="text-align:center;">'+title+'</td>\
			<td style="text-align:center;">'+author+'</td>\
			<td style="text-align:center;">'+volume_edition+'</td>\
			<td style="text-align:center;">'+publisher+'</td>\
			<td style="text-align:center;">'+year_published+'</td>\
			<td style="text-align:center;">'+isbn_issn+'</td>\
			<td style="text-align:center;">'+book_type+' '+book_medium+'</td>\
			<td style="text-align:center;"><input type="button" value="Remove" class="btn btn-danger btn-xs rem" id="rem" onclick=""></td>\
			</tr>');

		$('#bookdetails_title').val('');
		$('#bookdetails_title').closest('div').addClass("is-empty");
		$('#bookdetails_author').val('');
		$('#bookdetails_author').closest('div').addClass("is-empty");
		$('#bookdetails_volume_edition').val('');
		$('#bookdetails_volume_edition').closest('div').addClass("is-empty");
		$('#bookdetails_publisher').val('');
		$('#bookdetails_publisher').closest('div').addClass("is-empty");
		$('#bookdetails_year_published').val('');
		$('#bookdetails_year_published').closest('div').addClass("is-empty");	
		$('#bookdetails_isbn_issn').val('');
		$('#bookdetails_isbn_issn').closest('div').addClass("is-empty");
		$('#book_type').val('');
		$('#book_type').closest('div').addClass("is-empty");
		$('#book_medium').val('');
		$('#book_medium').closest('div').addClass("is-empty");
	}
});

$("body").on("click", ".rem", function() {
	var clear=$(this);	
	swal({
		title: "Are you sure?",
		text: "Your removing a book in the listt",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-warning",
		confirmButtonText: "Yes, remove it!"
	},
	function(){
		clear.parent().closest('tr').remove();
	});


});

function Prevent(message){
	swal({
		title: "Wait",
		text: message,
		type: "warning",
		confirmButtonClass: "btn-warning"
	});
}

function Success(message){
	swal({
		title: "Ok",
		text: message,
		type: "success",
		confirmButtonClass: "btn-success"
	});

}

function Success_no_confirm(message){
	swal({
		title: "Ok",
		text: message,
		type: "success",
		showConfirmButton: false
	});

}
var Faculty=[];
var substringMatcher = function(strs) {
	return function findMatches(q, cb) {
		var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
    	if (substrRegex.test(str)) {
    		matches.push(str);
    	}
    });

    cb(matches);
};
};

var l = window.location;
var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1]+ "/"+ l.pathname.split('/')[2];
$.ajax({
	type: "POST",
	url: base_url+'/administrator/request/get_all_faculty',
	data:{_token:$('#csrf').val()},
	dataType: "json",
	success:function(data){
		jQuery.each(data, function(index, item) {

			Faculty.push(item.faculty_fullname);
		});
		;
		

	}
});

$('.typeahead').typeahead({
	hint: true,
	highlight: true,
	minLength: 1
},
{
	name: 'Faculty',
	source: substringMatcher(Faculty)
});

$("#faculty_name").change(function()
{
	var faculty_name = $('#faculty_name').val();
	$.ajax({
		type: "POST",
		url: base_url+'/administrator/request/get_faculty_byname',
		data:{_token:$('#csrf').val(),faculty_name:faculty_name},
		dataType: "json",
		success:function(data){
			console.log(data[0]);

			if(data[0]!=null)
			{
				$('#faculty_id').val(data[0].id);
				$('#institute_id').val(data[0].faculty_department_id);
				$('#institute_id').closest('div').removeClass("is-empty");			
				$('#faculty_email').val(data[0].email);
				$('#faculty_email').closest('div').removeClass("is-empty");
				$('#faculty_phone').val('12312313');
				$('#faculty_phone').closest('div').removeClass("is-empty");
			}
			else
			{
				console.log(2);
			}

		}
	});	
});


$("#submit_request").on("click", function() {
	var faculty_name = $('#faculty_name').val();
	var faculty_id = $('#faculty_id').val();
	var institute_id = $('#institute_id').val();
	var faculty_email = $('#faculty_email').val();
	var faculty_phone = $('#faculty_phone').val();

	
	if(faculty_name == '' || institute_id == '' || faculty_email == '' || faculty_phone == '')
	{
		Prevent('Please fill up all faculty details');
	}
	else if($('#tableBook tr').length==1)
	{
		Prevent('No books added');
	}
	else if(faculty_id==''||faculty_id==null)
	{
		Prevent('Faculty is not yet registered');
	}
	else
	{
		swal({
			title: "Are you sure?",
			text: "Your submiting this request",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-success",
			confirmButtonText: "Yes, Save this request"
		},
		function(){
			headings=[];
			tableRowData=[];

			$('table tr th').each(function(i,v)
			{
				headings[i]=$(this).text();
			});

			$("table tr").each(function(i,v)
			{
				if(i!=0)
				{
					tableRowData[i]=[];
					$(this).children('td').each(function(ii,vv)
					{
						if(ii<7)
						{
							tableRowData[i][ii]=$(this).text();
						}
					});
				}
			});
			$.ajax({
				type: "POST",
				url: base_url+'/administrator/request/save_request',
				data:{_token:$('#csrf').val(),rowData:tableRowData,faculty_id:faculty_id,institute_id:institute_id},
				dataType: "json",
				success:function(data){
					if(data==1)
					{
						Success_no_confirm('Request has been added');
					}
						window.location.href = base_url+'/administrator/request/add_request'
					
				}
			});
			
		});
	}

	
});

