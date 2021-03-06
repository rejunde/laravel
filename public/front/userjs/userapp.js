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
			var materialclass = $('#classbook').val() !== null ? $('#classbook').val() : "";
			var materialtype = $('#typebook').val() !== null ? $('#typebook').val() : "";
			var section = $('input[name="section[]"]:checked').val() !== undefined ? $('input[name="section[]"]:checked').val() : "";
			var date = $('#date').val() !== "" ? $('#date').val() : "";
			if(author == "" || title == "" || volume == "" || published == "" || isbn == "" || materialclass == "" || materialtype == "" || section == "" || date == "")
				{
				
			alertsuccess('warning','<br>Please fill up all book details.');
		}else{
				$('#addbook').append('<tr>\
				<td>'+author+'</td>\
				<td>'+title+'</td>\
				<td>'+volume+'</td>\
				<td>'+published+'</td>\
				<td>'+isbn+'</td>\
				<td>'+materialclass+' - '+materialtype+'</td>\
				<td>'+section+'</td>\
				<td>'+date+'</td>\
				<td><i class="fa fa-times btn btn-primary removerow" data-value="'+count+'"></i></td>\
				</tr>');	
			alertsuccess('success','<br>Successfully added to list.');
			$('#bookForm').trigger("reset");
		}
						
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
			var $filter = $('#filter');
			if ($search.val() == "") {
				$('.searchbar').addClass('has-error');
				$('#requiredsearch').show();
				$(this).addClass('btn-danger').removeClass('btn-default');
				if($filter.val() == "" || $filter.val() == null){
					$('.filter').addClass('has-error');
					$('#requiredfilter').show();
				}else{
					$('.filter').removeClass('has-error');
					$('#requiredfilter').hide();
				}
			}else if($filter.val() == "" || $filter.val() == null){
				$('.filter').addClass('has-error');
				$('#requiredfilter').show();

				if($search.val() != ""){
					$('.searchbar').removeClass('has-error');
					$('#requiredsearch').hide();
				}
				
			}else{
				$('.searchbar').removeClass('has-error');
				$('#requiredsearch').hide();
				$('.filter').removeClass('has-error');
				$('#requiredfilter').hide();
				$(this).addClass('btn-default').removeClass('btn-danger');
			
				$.ajax({
					type:'GET',
					url:$('#searchdata').data('url')+'/search/searchresult/'+$search.val()+'/'+$filter.val(),
					dataType:'json',
					beforeSend: function(){
					$('#steps').fadeIn('slow');
				    $('#loading').fadeIn('slow');
				    $('#resultfound').hide();
				    $('#resultsearch').fadeOut('slow');
				 },
				 success: function(data){
				 	$('.searchresult').html('');							
				 	$('.tab-content').html('');
				 	var listItems = $(".listcheckactive li");
				 	listItems.each(function(idx, li) {
				 		if($(li).hasClass('active')){
				 			$(li).removeClass('active');
				 		}
				 	});
				 	jQuery("#loading").fadeOut( 1000 , function() {
				 		if(data.count > 0){
				 			var counter = 1;
				 			$('#'+data.data[0].booksteps_position).addClass('active');
				 			$.each(data.data,function(index,value){
				 				if (counter == 1){
				 					var checkactive ="active";

				 				}else{
				 					var checkactive ="";								

				 				}
				 				$('.searchresult').append('<li class="'+checkactive+'" disabled="disabled"><a   href="#tab'+counter+'" onclick="getposition(this.id)" data-value="'+value.booksteps_position+'" id="pos'+value.booksteps_position+'" data-toggle="tab" class="analistic-0'+counter+'">'+value.bookdetails_title+'</a></li>');


				 				$('.tab-content').append('<div class="tab-pane '+checkactive+' " id="tab'+counter+'">\
				 					<div class="media">\
				 					<div class="media-body">\
				 					<p><b>Requestor :</b> '+value.faculty_fullname+'<p>\
				 					<p><b>Institute :</b> '+value.department_name+'<p>\
				 					<p><b>Title : </b>'+value.bookdetails_title+'</p>\
				 					<p><b>Author :</b> '+value.bookdetails_author+'<p>\
				 					<p><b>Publisher :</b> '+value.bookdetails_publisher+'<p>\
				 					<p><b>Year of Publication :</b> '+value.bookdetails_year_published+'<p>\
				 					<p><b>Remarks :</b> '+value.bookdetails_remarks+'<p>\
				 					</div>\
				 					</div>\
				 					</div>');
				 				counter++;
				 			});
				 			$('#resultsearch').fadeIn('slow');

				 		}else{
				 			$('#resultfound').html('No Result Found.');
				 			$('#resultfound').fadeIn('slow');
				 		}
				 	});
				 }
				   // ......
				});
			}

		});


	function getposition(ele){
		var listItems = $(".listcheckactive li");
		listItems.each(function(idx, li) {
			 if($(li).hasClass('active')){
			 	$(li).removeClass('active');
			 }
		});
		$('#'+$('#'+ele).data('value')).addClass('active');
	}

	$('#savePrice').on('click',function(){
		swal("Good job!", "You clicked the button!", "success");
	});
		/*window.onbeforeunload = function() {
			return 'You have unsaved changes!';
		}*/