'use strict';

$(document).on('submit', 'form', function(event) {
	/* Act on the event */

	let name = $('#f_name').val();
	let email = $('#f_email').val();
	let phone = $('#f_phone').val();
	let year = $('#f_year').val();
	let city = $('#f_country').val();
	let content = $('#f_note').val();

	$.request('onCreateData', {
		data: {
			name : name,
			phone : phone,
			email : email,
			year : year,
			city : city,
			content : content,
		},
		success: function(data) {
			$('#js_popup_signup_success').modal('show');
		},
		error : function () {
			alert("Có lỗi vui lòng thử lại sau")
		}
	});

});

$('#js_popup_signup_success').modal('hide');
$(document).on('click', '#teacher', function(event) {
	event.preventDefault();
	/* Act on the event */
	var teacher_id = $(this).data('id');
	
	$.request('onDatateacher',{

		data:{
			id : teacher_id,
		},
		success: function(data)
		{
			$('#popup_mentor').modal("show");
			$('.txt-dt').html(data.education);
			$('.title__2').html(data.name);
			$('.img-mentor img').attr("src",'/storage/app/media' + data.image);
			$('.text-mentor').html(data.content);
		}		

	});
	
});
$(document).on('click', 'body #listrecord', function(event) {
	event.preventDefault();
	/* Act on the event */
		let record = $('.clamp__2').length;

	$.request('onPaginationajax',{
		// data:{
		// 	record = record,
		// },
		success: function(data)
		{
			$('.wrapper-blog').append(data);
		}	
	});
});