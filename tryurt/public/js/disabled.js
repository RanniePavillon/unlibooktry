$(function(){
	$('input[type="text"]').prop('disabled',true);
	
	$('form').submit(function(){
		return false;
	});
	
	$('.buttonHolder').addClass('hidden');
})