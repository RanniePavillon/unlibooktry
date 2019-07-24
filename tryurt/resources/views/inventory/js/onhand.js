$(function () {
    $('.showWarehouse').click(function(){
	  if($(this).is(':checked')){
		$('.warehouse').removeClass('hidden');
	  }else{
		$('.warehouse').addClass('hidden');
	  }
	});
});
