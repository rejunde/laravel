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

		$('input[name="materialtype[]"]').on('change',function(){
			var th = $(this), name = th.prop('name'); 
			if(th.is(':checked')){
				$(':checkbox[name="'  + name + '"]').not($(this)).prop('checked',false);   
			}
		});

		$('input[name="section[]"]').on('change',function(){
			var th = $(this), name = th.prop('name'); 
			if(th.is(':checked')){
				$(':checkbox[name="'  + name + '"]').not($(this)).prop('checked',false);   
			}
		});

		$('#addtolist').on('click',function(){
			count = parseInt($('#count').text())+1;
			$('#count').text(count);
			var author = $('#author').val() !== "" ? $('#author').val() : "";
			var title = $('#title').val() !== "" ? $('#title').val() : "";
			var volume = $('#volume').val() !== "" ? $('#volume').val() : "";
			var published = $('#published').val() !== "" ? $('#published').val() : "";
			var isbn = $('#isbn').val() !== "" ? $('#isbn').val() : "";
			var materialtype = $('input[name="materialtype[]"]:checked').val() !== undefined ? $('input[name="materialtype[]"]:checked').val() : "";
			var section = $('input[name="section[]"]:checked').val() !== undefined ? $('input[name="section[]"]:checked').val() : "";
			var date = $('#date').val() !== "" ? $('#date').val() : "";
			$('#addbook').append('<tr>\
				<td>'+author+'</td>\
				<td>'+title+'</td>\
				<td>'+volume+'</td>\
				<td>'+published+'</td>\
				<td>'+isbn+'</td>\
				<td>'+materialtype+'</td>\
				<td>'+section+'</td>\
				<td>'+date+'</td>\
				<td><i class="fa fa-times btn btn-primary removerow" data-value="'+count+'"></i></td>\
				</tr>');	
			alertsuccess('success','<br>Successfully added to list.');
			$('#bookForm').trigger("reset");			
		});

		$('body').on('click','.removerow',function(){
				var $this = $(this).closest('tr');
			swal({
				title: "<br>Are you sure?",
				text: "<br>You will not be able to recover data!",
				type: "error",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "Delete",
				cancelButtonClass:'btn-default',
				cancelButtonText: "Cancel!",
				closeOnConfirm: false,
				html: true
			},
			function(isConfirm){
				if (isConfirm) {
						var rowCount = $("#addbook").children('tr').length;
					$('#count').text(rowCount - 1) ;
					$this.remove();
					swal({
						title: "",
						text: "<br>Book has been deleted.",
						type:'success',
						timer: 2000,
						showConfirmButton: true, 
						html: true,
						confirmButtonClass: 'btn-success' 				
					});


				} 
			});
			
		});


		function alertsuccess(status,msg){
			swal({
				title: "",
				text: ""+msg+"",
				type:''+status+'',
				timer: 2000,
				showConfirmButton: true, 
				html: true,
				confirmButtonClass: 'btn-'+status+'' 				
			});
		}

		$('#btnsearch').on('click',function(){
			var $search = $('#searchdata');
			if ($search.val() == "") {
				$('.searchbar').addClass('has-error');
				$('#requiredsearch').show();
				$(this).addClass('btn-danger').removeClass('btn-default');
			}else{
				$('.searchbar').removeClass('has-error');
				$('#requiredsearch').hide();
				$(this).addClass('btn-default').removeClass('btn-danger');
			
				$.ajax({
					type:'GET',
					url:$('#searchdata').data('url')+'/search/searchresult/'+$search.val(),
					dataType:'json',
					beforeSend: function(){
				     $('#loading').fadeIn('slow');
				     $('#resultfound').hide();
				     $('#resultsearch').fadeOut('slow');
				 },
				 success: function(data){
				 	jQuery("#loading").fadeOut( 1000 , function() {
				 	if(data.data == 1){
				 		
					     $('#resultsearch').fadeIn('slow');
					
				 	}else{
				 		$('#resultfound').html('No Result Found.');
				 		$('#resultfound').fadeIn('slow');
				 	}
				 	});
				 	  
				     console.log(data);
				 }
				   // ......
				});
			}

		});


	
		/*window.onbeforeunload = function() {
			return 'You have unsaved changes!';
		}*/