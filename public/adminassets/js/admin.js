

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
		Prevent('Please fill up all book detais');
	}
	else
	{
		Success('Book Added');
		$('#list').append('<tr><td style="text-align:center;">'+title+'</td><td style="text-align:center;">'+author+'</td><td style="text-align:center;">'+volume_edition+'</td><td style="text-align:center;">'+publisher+'</td><td style="text-align:center;">'+year_published+'</td><td style="text-align:center;">'+isbn_issn+'</td><td style="text-align:center;">'+book_type+' '+book_medium+'</td><td style="text-align:center;"><input type="button" value="Remove" class="btn btn-danger btn-xs rem" id="rem" onclick=""></td></tr>');

		$('#bookdetails_title').val('');
		$('#bookdetails_author').val('');
		$('#bookdetails_volume_edition').val('');
		$('#bookdetails_publisher').val('');
		$('#bookdetails_year_published').val('');
		$('#bookdetails_isbn_issn').val('');
		$('#book_type').val('');
		$('#book_medium').val('');
	}
});

$("body").on("click", ".rem", function() {
	var clear=$(this);	
	swal({
		title: "Are you sure?",
		text: "Your will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Yes, delete it!"
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

