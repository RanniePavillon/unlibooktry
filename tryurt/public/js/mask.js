$(function() {
	$.mask.definitions['~']='[+-]';
	$(".tinmask").mask("999-999-999?-9999");
	//$('.phonemask').mask("999 9999 ?to 9999-9999");
	$('.phonemask').mask("999-9999 ?to 999-9999");
})
