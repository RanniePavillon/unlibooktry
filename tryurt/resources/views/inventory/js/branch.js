savenew = false;
$(function () {
	$('#saveAddNew').click(function(){
		savenew = true;
	});


    $('.cmForm').submit(function(){
		$.post(URL + 'warehouse/setWarehouse', $(this).serialize())
			 .done(function(returnData){
				 if ($.isNumeric(returnData)) {
                    $('.warehouseId').each(function (i) {
                        $('option:last', $(this)).before($('<option/>', {
                            value: returnData,
                            text: $('input[name="warehouseName"]').val()
                        }));
                    });

                  $('.activeObj option').removeAttr('selected')
                            .filter('[value="' + returnData + '"]')
                            .attr('selected', true);

                    $('.activeObj').removeClass('activeObj');
					$('.popBack').html('').addClass('hidden');
                } else if (returnData == '') {
                    if (savenew == true) {
                        $('.createNLocation').click();
                        return false;
                    }

                    location = URL + 'inventory/location';
                } else {
                    alert(returnData);
                }
				
			 });
			 return false;
	});
	
	return false;
});