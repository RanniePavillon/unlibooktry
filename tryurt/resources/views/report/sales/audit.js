$('.hasDate').prop('readonly', true);
	$('.hasDate').datepicker({
		dateFormat: 'mm/dd/yy'
	});
	$('.hasDate').change(function(){
		dates = $.datepicker.formatDate('mm/dd/yy', new Date($(this).val()));
		$(this).val(dates);
	});
