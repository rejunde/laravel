$(document).ready(function(){
	$("tbody tr .getdata").on('click',function() {  	
		var id = $(this).find('input[type="hidden"]').val();
		var year_id = $('#year').val();
		var td  = $(this);
		$.ajax({
			type:'GET',
			url:window.location.href+'/getdata',
			data:{department_id:id,year_id:year_id},
			success: function(response){
				console.log(response)
				$('#div'+id).html('');
				if(response['data'].length == 0){
					$('#div'+id).append('<blockqoute>No data Found.</blockqoute>');
				}else{
					$.each(response['data'],function(index,value){
						if(value.bookfund_Sem == 1){
							$('#div'+id).append('<a href="'+window.location.href+'/bookfunddetails/'+value.bookfund_id+'"><i class="fa fa-folder-o" aria-hidden="true"></i>   1st Semester'+' '+ value.year+'</a><br>');
						}else{
							$('#div'+id).append('<a href="'+window.location.href+'/bookfunddetails/'+value.bookfund_id+'"><i class="fa fa-folder-o" aria-hidden="true"></i>   2nd Semester'+' '+ value.year+'</a><br>');}
						});
				}
			}
		});
	});
});

function getYear(ele,event){
	event.preventDefault();
	$('#getYear').html('');
	$('#getYear').append($('#'+ele).text());
	$('#year').val(ele);
	$("tbody tr .getdata").each(function(){
		var id = $(this).find('input[type="hidden"]').val();
		$('#div'+id).attr("aria-expanded","false");
		$('#div'+id).removeClass("collapse in");
		$('#div'+id).addClass("collapse");
	});
}